<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Product;
use App\Models\Typology;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(!Auth::user()->company){
            $typologies=Typology::all();
            return view('admin.companies.create',compact('typologies'));
        };
        $userOrders=[];
        $company=Auth::user()->company;
        
        foreach(Order::all() as $order){
            $orderCompany=$order->products->first()->company_id;
            if($company->id==$orderCompany){
                array_push($userOrders,$order);
            }
        }
        return view('admin.orders.index', compact('userOrders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('admin.orders.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        $previousurl=url()->previous();
        if(Auth::user()->company){
            return redirect($previousurl);
        };
        $data = $request->all();
        $new_order = new Order();
        $new_order-> name= $data['name'];
        $new_order-> total_price= $data['total_price'];
        $new_order-> email= $data['email'];
        $new_order-> telephone= $data['telephone'];
        $new_order-> address= $data['address'];
        $new_order->save();
        if(isset($data['products'])){
            $new_order->products()->syncWithPivotValues($data['products'], [
              'quantity'=> '2'
            ]);
        }
        return redirect()->route('admin.orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {   
        $previousurl=url()->previous();
        if(Auth::user()->company->id!=$order->products->first()->company_id){
            return redirect($previousurl);
        };
        return view('admin.orders.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}

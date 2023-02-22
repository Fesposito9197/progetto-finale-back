<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Order_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        foreach(Order::all() as $order){
            $order->products()->sync([]);
            $totalPrice=0;
            $company=Company::inRandomOrder()->first();
            $productsNum=count(Product::where('company_id',$company->id)->get());
            $randCounter=rand(1,6);
            $indexs=[];
            for($index=0;$index<$randCounter;$index++){
                $randId=rand(1,$productsNum);
                if(in_array($randId,$indexs)){
                    $index--;
                    break;
                }
                array_push($indexs,$randId);
                $product=Product::find($randId);
                $quantity=rand(1,6);
                $price=$product->price * $quantity;
                $totalPrice+=$price;
                $order->products()->attach(array_fill_keys([$randId],[
                    'quantity'=>$quantity
                ]));
            }
            $order->update(['total_price'=>$totalPrice]);
        }
    }
}

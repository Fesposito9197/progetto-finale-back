<?php

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TypologyController;
use App\Models\Order;
use App\Models\Typology;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
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

        return view('admin.dashboard', compact('userOrders'));
    })->name('dashboard');
    Route::resource('companies', CompanyController::class);
    Route::resource("products", ProductController::class);
    Route::resource("orders", OrderController::class);
    Route::resource("typologies", TypologyController::class);
    Route::get('/company', function () {
        return redirect()->route('admin.companies.show',Auth::user()->company);
    })->name('admin.logged.user');
});

require __DIR__.'/auth.php';

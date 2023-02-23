<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        "company_id",
    ];
    public function orders(){
        return $this->belongsToMany('App\Models\Order', 'order_product', 'product_id', 'order_id' )->withPivot('quantity');
    }
    public function company(){
        return $this->belongsTo(Company::class);
    }
}

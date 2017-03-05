<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Cart extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['product_id', 'user_id', 'qty'];
    
    public function getCarts($userId) {
        return $this->select('*')
            ->leftJoin('products', function ($join) {
                $join->on('carts.product_id', '=', 'products.id');
            })
            ->where('user_id', $userId)
            ->get();
    }
    
    public function getQty($userId, $productId) {
        return $this->select('qty')
        ->where('user_id', $userId)
        ->where('product_id', $productId)
        ->first();
    }
}

<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'price', 'material', 'type', 'size', 'code', 'quantity', 'description', 'image'];
    
    public function getAllList() {
        return $this->orderBy('id', 'desc')->paginate(Cache::get('setting')['recordPerPage']);
    }
}

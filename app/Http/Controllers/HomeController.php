<?php

namespace App\Http\Controllers;


use App\Model\Product;


class HomeController extends Controller
{
    /**
     * @var Product
     */
    private $product;
    
    public function __construct(Product $product)
    {
        // $this->middleware('auth');
        $this->product = $product;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->product->getAllList();

        return view('user.product.index', compact('products'));
    }
}

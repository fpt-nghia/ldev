<?php
namespace App\Http\Controllers\User;

use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Cache;
class ProductController extends Controller
{
    /**
     * @var Product
     */
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $products = $this->product->getAllList();

        return view('user.product.index', compact('products'));
    }

    public function detail(Request $request)
    {
        $product = $this->product->where('id', $request->id)->first();
        return view('user.product.product_detail', compact('product'));
    }
}

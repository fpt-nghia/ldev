<?php
namespace App\Http\Controllers\Backend;

use App\Model\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

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

        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProductRequest  $request
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();
         
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = 'uploads';
            $file->move($destinationPath, $file->getClientOriginalName());
            $data['image'] = $file->getClientOriginalName();
        }
        
        Product::create($data);

        return redirect('backend/product')
                ->with('flash_message', Cache::get('product')['messageCreated']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Product $product
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(Product $product)
    {
        return view('backend.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductRequest $request
     * @param  Product $product
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function update(ProductRequest $request, Product $product)
    {        
        $data = $request->all();
     
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = 'uploads';
            $file->move($destinationPath, $file->getClientOriginalName());
            $data['image'] = $file->getClientOriginalName();
        }
        
        $product->update($data);
            
        return redirect('backend/product')
                ->with('flash_message', Cache::get('product')['messageUpdated']);
    }

    /**
     *  Remove the specified resource for the given IDs.
     *
     * @param Request $request
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function destroys(ProductRequest $request)
    {
        Product::destroy($request->get('ids'));

        return redirect()
                ->back()
                ->with('flash_message', Cache::get('product')['messageDeleted']);
    }
}
<?php
namespace App\Http\Controllers\User;

use App\Model\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    private $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function add(Request $request)
    {
        if (! Auth::check()) {
            return redirect('register');
        }
        
        $qty = (int) $request->get('qty');
        $productId = $request->get('product_id');
        $userId = Auth::id();
        
        if ($cart = $this->cart->getQty($userId, $productId)) {
            Cart::where('user_id', $userId)
                ->where('product_id', $productId)
                ->update(['qty' => $qty + (int) $cart->qty]);
        } else {
            Cart::create([
                'qty' => $qty,
                'product_id' => $productId,
                'user_id' => $userId,
            ]);
        }
        
        
        return redirect('cart');
    }
    
    public function cart()
    {
        $userId = Auth::id();
        $products = $this->cart->getCarts($userId);
        return view('user.cart.index', compact('products'));
    }
}

<?php


namespace App\Http\Controllers;


use Carbon\Carbon;
use App\BillDetails;
use App\TypeProducts;
use Illuminate\Http\Request;
use App\Slide;
use App\Products;
use App\Cart;
use Session;
use App\Bills;
use Illuminate\Support\Facades\Auth;

class LayoutController extends Controller
{
    //

    public function trangchu()
    {
    	$slide=Slide::all();
    	$typeproducts=TypeProducts::all();
    	$products=Products::all();
    	return view('layout.index',['slide'=>$slide,'typeproducts'=>$typeproducts]);
    }

    public function loaisanpham($id)
    {
    	$product=Products::where('id_type',$id)->paginate(9);
    	$type=TypeProducts::find($id);
    	return view('layout.productbytype',['product'=>$product,'type'=>$type]);
    }

    public function sanpham($id)
    {
    	$product=Products::find($id);
    	$listproducts=Products::where('new',1)->take(13)->get();
    	return view('layout.product',['product'=>$product,'listproducts'=>$listproducts]);
    }

    public function lienhe()
    {
    	return view('layout.contact');
    }
    //Them gio hang
   public function getAddtoCart(Request $req,$id)
   {
        $product=Products::find($id);
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
   }
   //Xoa gio hang

   public function getDelItemCart($id)
   {
        $oldCart=Session::has('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->removeItem($id);
        Session::put('cart',$cart);
        return redirect()->back();
   }

   //Thanh toan

   public function thanhtoan()
   {
        $oldCart=Session::has('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        Session::put('cart',$cart);
        return view('layout.thanhtoan',['cart'=>$cart]);
   }

   public function postthanhtoan(Request $request)
   {
    $cart=Session::has('cart')?Session::get('cart'):null;
    

    $bill=new Bills();
    $mytime = Carbon::now();
    $bill->date_order = $mytime->toDateTimeString();
    $bill->id_customer=Auth::check()?Auth::user()->id:0;
    $bill->total=$cart->totalPrice;
    $bill->payment=$request->payment;
    $bill->note=$request->note;

    $bill->save();

    foreach($cart->items as $key => $products)
    {
      $billdetail=new BillDetails();
      $billdetail->id_bill=$bill->id;
      $billdetail->id_product=$key;
      $billdetail->quantity=$products['qty'];
      $billdetail->unit_price=$products['price']/$products['qty'];
      $billdetail->save();
    }

    
    
    return view('layout.thanhtoanthanhcong');
   }
}

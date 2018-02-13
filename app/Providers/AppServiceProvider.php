<?php

namespace App\Providers;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\TypeProducts;
use App\Products;
use App\Cart;
use Session;
use App\User;
use Illuminate\Support\Facades\DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Xac nhan co phai admin khong
        view()->composer('*', function($view) {
            $view->with('user', auth()->user());
        });

        
        $loaisp=TypeProducts::all();
             View::share('loaisp',$loaisp);
        $sliderproduct=Products::all();
            View::share('sliderproduct',$sliderproduct);
        
        view()->composer(['layout.header','layout.thanhtoan'],function($view){
            $oldCart=Session::get('cart');
            $cart=new Cart($oldCart);
            if(Session('cart')){
                $oldCart=Session::get('cart');
                $cart=new Cart($oldCart);

            }
            $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

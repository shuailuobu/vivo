<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class CartController extends Controller
{
    //
    public function cart()
    {
    	//获取购物车的数据
    	$res = DB::table('cart')->get();

    	return view('home.shopcart.cart',['title'=>'前台的购物车','res'=>$res]);
    }

  
}

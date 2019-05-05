<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlazaController extends Controller
{
   public function plaza()
   {
   		return view('home.personal.plaza');
   }

   
   

}

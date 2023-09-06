<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get();
 
        return view('display', ['products' => $products]);
    } 
}

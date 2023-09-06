<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete($id)
    
    { $products = DB::table('products')->get();
        product::where(['id'=>$id])->delete();
        return redirect()->route('display', ['products' => $products]);
        
       
    }
}

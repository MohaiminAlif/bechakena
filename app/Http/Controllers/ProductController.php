<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Products;

class ProductController extends Controller
{
    public function get_category($category)
    {
        $datas = DB::table('products')
                ->where('category', '=', $category)
                ->get();

        return view('Main/products' , compact('datas'));
    }

    public function get_product($id)
    {
        $product = Products::findOrFail($id);
        return view('Main/single_product_view', compact('product'));
    }

    public function filter_by_amount(Request $request)
    {
        
        if($request->amount == "1"){

            $datas = DB::table('products')
                ->whereDate('price', '>=', 50)                                 
                ->whereDate('price', '<', 20000)                                 
                ->get();


            return view('Main/products' , compact('datas'));
            
        }
    }
}

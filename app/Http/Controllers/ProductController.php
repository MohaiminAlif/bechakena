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
                ->where('price', '>', 0)                                 
                ->where('price', '<=', 2000)                                 
                ->get();

            return view('Main/products' , compact('datas'));
            
        }
        if($request->amount == "2"){

            $datas = DB::table('products')
                ->where('price', '>', 2000)                                 
                ->where('price', '<=', 10000)                                 
                ->get();

            return view('Main/products' , compact('datas'));
            
        }
        if($request->amount == "3"){

            $datas = DB::table('products')
                ->where('price', '>', 10000)                                 
                ->where('price', '<=', 20000)                                 
                ->get();

            return view('Main/products' , compact('datas'));
            
        }
        if($request->amount == "4"){

            $datas = DB::table('products')
                ->where('price', '>', 20000)                                 
                ->where('price', '<=', 50000)                                 
                ->get();

            return view('Main/products' , compact('datas'));
            
        }
        
    }
}

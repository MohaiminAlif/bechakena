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
}

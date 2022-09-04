<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Orders;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
        $data = auth()->user();

        if($data->role_id == 'Admin'){
            
            return view('admin/profile', compact('data'));
        }
        else{


            // $orders = DB::table('products')
            //         ->where('category', '=', $data->id)
            //         ->get();      
            // return view('home', compact('data', 'orders'));

            return view('home', compact('data'));
        }
        
    }
}

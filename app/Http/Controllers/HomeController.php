<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;
use Illuminate\Support\Facades\Hash;

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

    public function reset(Request $request){

        $token = $request->_token;
        $id = $request->id;

        return view('auth/passwords/reset', compact('token', 'id'));
    }

    public function update(Request $request){

        // dd($request);
        $data = User::findOrFail($request->id);
        
        if($data->email == $request->email){

            $data->password = Hash::make($request->password);

            $data->update();
            return view('/home', compact('data')); 

        };
            
    }
}

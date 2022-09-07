<?php

namespace App\Http\Controllers;

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
            return view('home', compact('data'));
        }
        
    }
}

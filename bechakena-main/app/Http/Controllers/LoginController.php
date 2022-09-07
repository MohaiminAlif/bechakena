<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{


    function process(){
        return view('loginPage');
    }
    
    public function process_login(Request $request)
    {
        
        
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        //$credentials = $request->except(['_token']);

        //$user = User::where('email',$request->email)->first();

        $user = User::all('email');


       if($request->email == $user){

            echo "string";

       }

       else{

        echo $user;
        echo $request->email;
       }
        

        /*

        if (auth()->attempt($credentials)) {

            return view('home');

        }else{
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
*/
    }
}


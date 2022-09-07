<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;
use App\Models\Vendors;
use App\Models\User;

class adminController extends Controller
{


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
       return view('admin/profile');
   }


    function user(){
       
        $lists = User::all();
        return view('admin/user_list', compact('lists'));
 
     }

     function vendor(){
       
        $lists = Vendors::all();
        $count = '0';

        foreach($lists as $data){
            if($data->status == "pending") $count++;
        }

        return view('admin/vendor_list', compact('lists', 'count'));
 
     }

     function vendor_pending_list(){
       
        $lists = Vendors::all();
     
        return view('admin/vendor_pending', compact('lists'));
 
     }

     function product(){
      
        $lists = Products::all();
        return view('admin/product_list', compact('lists'));

    }

    public function role_change($id){

        
        $vData = Vendors::findOrFail($id);
        $uData = User::findOrFail($vData->uID);
        
         
        $vData->status = "Vendor";
        $uData['role_id'] = 'Vendor';
        
        
        $uData  ->save(); 
        $vData  ->save(); 
               

        return redirect('vendor_pending_list');



    }

    public function role_change_back($id){

        $vData = Vendors::findOrFail($id);
        $uData = User::findOrFail($vData->uID);
 
        $vData->status = "pending";
        $uData->role_id = "pending";
              
        $uData -> save();
        $vData -> save();
        
        return redirect('vendors');
    }

    function single_vendor_details($vID){

        $vData = Vendors::findOrFail($vID);
        $uData = User::findOrFail($vData->uID);
        

        return view('admin/single_vendor_details', compact('vData' , 'uData'));
    }

    function delete($id){

        $vData = Vendors::findOrFail($id);
        $uData = User::findOrFail($vData->uID);

        $uData->role_id = "User";


        if (file_exists($vData->trade_licence))
        {
            dd($uData);
            unlink($vData->trade_licence);
        }
        if ($vData->trade_licence!= NULL)
        {
            dd($uData);
            unlink($vData->trade_licence);
        }
        
        if (file_exists($vData->nid))
        {
            dd($uData);
            unlink($vData->nid);
        }

        dd($id);
        $uData -> save();
        $vData->delete();
        
        return redirect()->back()->with('message','Student Info Deleted Successfully!');
    }
    


}

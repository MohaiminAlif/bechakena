<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colors;
use App\Models\Products;
use App\Models\Sizes;
use App\Models\Vendors;
use App\Models\User;


class VendorController extends Controller
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

    function index(){

        $udata = auth()->user();
        
        $vdata = Vendors::findOrFail($udata->vID);
                
        return view('Vendor/vendor_panel', compact('vdata'));

    }


    function product_list(){

        $uData = auth()->user();

        $vData = Vendors::findOrFail($uData->vID);
        $lists = Products::all();

        $product_list = [];


        for ($i=0; $i < sizeof($lists); $i++) { 
            if($lists[$i]->vendorID == $uData->vID){
                $product_list[$i] = $lists[$i];
               
            }
        }

        return view('Vendor/product_list', compact('product_list'));

    }


    function upload(){

        return view('Vendor/product_upload_page');


    }

    public function insert_product(Request $request){

        $uData = auth()->user();
        $vData = Vendors::findOrFail($uData->vID);
        $product= new Products(); 
        
        $product['name']        =    $request->name;
        $product['category']    =    $request->category;   
        $product['price']       =    $request->price;
        $product['description'] =    $request->description;
        $product['vendorID']    =    $vData->id;

        if($request->file('img')){
            $file= $request->file('img');
            $filename= $file->getClientOriginalName().date('YmdHi');
            $file-> move(public_path('/Image'), $filename);
            $product['img']= $filename;
        }

        $product ->save();
        return view('Vendor/preview_page', compact('product'));

    }

    function preview(){
        return view('Vendor/preview_page');
    }

    function insert_color(Request $request){

        $color= new Colors();
                   
        if($request->file('product_color')){
            $file= $request->file('product_color');
            $filename= $file->getClientOriginalName().date('YmdHi');
            $file-> move(public_path('/Image'), $filename);
            $color['product_color']= $filename;
        }

        $color['color'] =    $request->color;
        $color['unit'] =    $request->unit;
        $color['productID'] =    $request->productID;

        $color  ->save();

        $product = Products::findOrFail($request->productID);
    
        return view('Vendor/preview_page', compact('product'));
           
  
    }   
    
    function insert_size(Request $request){

        $size= new Sizes();
                    
        if($request->file('img_1')){
            $file= $request->file('img_1');
            $filename= $file->getClientOriginalName().date('YmdHi');
            $file-> move(public_path('/Image'), $filename);
            $size['img_1']= $filename;
        }

        if($request->file('img_2')){
                $file= $request->file('img_2');
                $filename= $file->getClientOriginalName().date('YmdHi');
                $file-> move(public_path('/Image'), $filename);
                $size['img_2']= $filename;
        }
            
        if($request->file('img_3')){
            $file= $request->file('img_3');
            $filename= $file->getClientOriginalName().date('YmdHi');
            $file-> move(public_path('/Image'), $filename);
            $size['img_3']= $filename;
        }

        $size['size']   =    $request->color;
        $size['units']  =    $request->units;

        $size  ->save();

        return redirect()->back();
    
           
  
    }   



    function pic_upload($pID){
        //dd($pID);
        return view('Vendor/insert_pic', compact('pID'));
    }


    function vendor_form(){
        return view('Vendor/vendor_form');
    }


    protected function create_vendor(Request $request)
    {
       
        $userID = auth()->user();
        $vendor = new Vendors();
        
        $vendor['name']         =    $request->name;
        $vendor['phone']        =    $request->phone;
        $vendor['address']      =    $request->address;
        $vendor['city']         =    $request->city;
        $vendor['zip']          =    $request->zip;
        $vendor['uID']          =    $userID->id;
        $vendor['status']       =    'pending';
        
        
        if($request->file('trade_licence')){
            
            $file= $request->file('trade_licence');
            $filename= $file->getClientOriginalName().date('YmdHi');
            $file-> move(public_path('/Image/Vendor_Documents'), $filename);
            $vendor['trade_licence']= $filename;
        };

                
        if($request->file('nid')){
            
            $file= $request->file('nid');
            $filename= $file->getClientOriginalName().date('YmdHi');
            $file-> move(public_path('/Image/Vendor_Documents'), $filename);
            $vendor['nid']= $filename;
        };

        $vendor  ->save(); 
        
        $data = Vendors::findOrFail($vendor->id);
        
        return view('Vendor/review_page', compact('data'));

    
    }


    // function vendor_pending(){
    //     return view('Vendor/review_page');
    // }


    public function vendor_data_review(Request $request)
    {
        $vendor = Vendors::findOrFail($request->id);
        
        $userID = auth()->user();
        $user = User::findOrFail($userID->id);
                
        $user['vID'] = $vendor->id;
        $user['role_id']= 'pending';  
        $user-> save();
    

        return redirect('/home')->with('message','Data Saved sucessfully!');
    }

    function pending_msg(){
        return view('Vendor/pending_page');
    }
}
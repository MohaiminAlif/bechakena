<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\VendorController;

// Vendor Controller

Route::get('/vendor_panel',[VendorController::class, 'index'])->name('vendor')->middleware('check_vendor_role');

Route::get('/vendor_form','App\Http\Controllers\VendorController@vendor_form')->name('vendor_form');
Route::post('/vendor_create','App\Http\Controllers\VendorController@create_vendor')->name('vendor_create');
Route::get('/vendor_pending/{$vID}','App\Http\Controllers\VendorController@vendor_pending')->name('vendor_pending');
Route::post('/vendor_data_review', 'App\Http\Controllers\VendorController@vendor_data_review')->name('vendor_data_review');
Route::get('/pending_msg', 'App\Http\Controllers\VendorController@pending_msg')->name('pending_msg');

Route::get('/product_list' , 'App\Http\Controllers\VendorController@product_list')->name('product_list')->middleware('check_vendor_role');

Route::get('/product_upoad_page' , 'App\Http\Controllers\VendorController@upload')->name('upload')->middleware('check_vendor_role');
Route::post('/insert_product', 'App\Http\Controllers\VendorController@insert_product')->name('insert_product')->middleware('check_vendor_role');
Route::get('/preview_page','App\Http\Controllers\VendorController@preview')->name('product_preview')->middleware('check_vendor_role');

Route::get('/pic_upload_page/{pID}','App\Http\Controllers\VendorController@pic_upload')->name('insert_pic')->middleware('check_vendor_role');
Route::post('/insert_color', 'App\Http\Controllers\VendorController@insert_color')->name('insert_color')->middleware('check_vendor_role');
Route::post('/insert_size', 'App\Http\Controllers\VendorController@insert_size')->name('insert_size')->middleware('check_vendor_role');

// vendor Contoller ends


//Admin Controllers starts

Route::get('/admin_profile','App\Http\Controllers\adminController@index')->name('admin_profile')->middleware('check_admin');
Route::get('/users','App\Http\Controllers\adminController@user')->name('user_list')->middleware('check_admin');
Route::get('/vendors','App\Http\Controllers\adminController@vendor')->name('vendor_list')->middleware('check_admin');
Route::get('/vendor_pending_list','App\Http\Controllers\adminController@vendor_pending_list')->name('vendor_pending_list')->middleware('check_admin');
Route::get('/products','App\Http\Controllers\adminController@product')->name('admin_product_list')->middleware('check_admin');
Route::get('/delete_vendor_application/{id}', 'App\Http\Controllers\adminController@delete')->name('delete_vendor_application')->middleware('check_admin');
Route::get('/delete_vendor/{id}', 'App\Http\Controllers\adminController@delete')->name('delete_vendor')->middleware('check_admin');
Route::get('/vendor_deatails/{id}', 'App\Http\Controllers\adminController@single_vendor_details')->name('single_vendor_details')->middleware('check_admin');
Route::get('/role_change_to_user/{id}', 'App\Http\Controllers\adminController@role_change_back')->name('vendor_role_change')->middleware('check_admin');

//Admin Controllers Ends

//Product Controller

Route::get('/products/{category}', 'App\Http\Controllers\ProductController@get_category');
Route::get('/single_product/{id}', 'App\Http\Controllers\ProductController@get_product');




Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


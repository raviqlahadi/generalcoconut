<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    $data['sliders'] = __('sliders');
    return view('homepage.index', $data);
});


Route::get('/about', function () {
    return view('about.index');
});

Route::get('/product', function () {
    $data['coconut'] = __('products.coconut');
    $data['spices'] = __('products.spices');
    return view('product.index', $data);
});

Route::get('/product-detail/{id}', function ($id) {
    $products = __('products');
    $exists_coco = Arr::exists($products['coconut'], $id);
    if($exists_coco){
        $type = 'coconut';
    }else{
        $exists = Arr::exists($products['spices'], $id);
        if($exists){
            $type = 'spices';
        }else{
            abort(404);
        }
    }
    $data['product'] = __('products.'.$type.'.'.$id);
    return view('product.detail',$data);
});

Route::get('/gallery', function () {
    return view('gallery.index');
});

Route::get('/faq', function () {
    return view('faq.index');
});

Route::get('/contact', function () {
    return view('contact.index');
});
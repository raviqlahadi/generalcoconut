<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;



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
    if(!(session('lang'))){
        session(['lang'=>'en']);
    }
    $locale = session('lang');
    App::setLocale($locale);

    $data['navs'] = __('navs');
    $data['footer'] = __('footer');
    $data['sliders'] = __('sliders');
    $data['locale'] = $locale;
    $data['content'] = Arr::dot(__('homepage'));
    return view('homepage.index', $data);
});


Route::get('/about', function () {
    $locale = session('lang');
    App::setLocale($locale);
    
    $data['navs'] = __('navs');
    $data['footer'] = __('footer');
    $data['about'] = __('about');
    $data['locale'] = $locale;
    return view('about.index',$data);
});

Route::get('/product', function () {
    $locale = session('lang');
    App::setLocale($locale);
    
    $data['navs'] = __('navs');
    $data['footer'] = __('footer');
    $data['coconut'] = __('products.coconut');
    $data['spices'] = __('products.spices');
    $data['product'] = __('products');
    $data['locale'] = $locale;
    return view('product.index', $data);
});

Route::get('/product-detail/{id}', function ($id) {
    $locale = session('lang');
    App::setLocale($locale);

    $data['navs'] = __('navs');
    $data['footer'] = __('footer');
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
    $data['products'] = __('products');
    $data['locale'] = $locale;
    
    return view('product.detail',$data);
});

Route::get('/gallery', function () {
    $locale = session('lang');
    App::setLocale($locale);

    $data['navs'] = __('navs');
    $data['footer'] = __('footer');
    $data['images'] = __('gallery.images');
    $data['gallery'] = __('gallery');
    $data['locale'] = $locale;
    return view('gallery.index', $data);
});


Route::get('/contact', function () {
    $locale = session('lang');
    App::setLocale($locale);
    
    $data['navs'] = __('navs');
    $data['footer'] = __('footer');
    $data['contact'] = __('contact');
    $data['locale'] = $locale;
    return view('contact.index',$data);
});

Route::get('/change/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'cn'])) {
        abort(400);
    }
    session(['lang' => $locale]);
    return redirect()->back();
});
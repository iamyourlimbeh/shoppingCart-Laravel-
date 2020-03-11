<?php

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
    return view('welcome');
});
Route::get('/main',function() {
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/addProduct',[
    'uses'=>'ProductController@create',
    'as'=>'product'
]);

Route::post('/product/store',[
    'uses'=>'ProductController@store',
    'as'=>'addProduct.store'
]);

Route::get('/viewproduct',[
    'uses'=>'ProductController@view',
    'as'=>'view.product'
]);

Route::get('/viewproduct/delete/{id}',[
    'uses'=>'ProductController@delete',
    'as'=>'viewproduct.delete'
]);

Route::get('/viewlist',[
    'uses'=>'ProductController@viewlist',
    'as'=>'view.list'
]);

Route::get('/productdetail/{id}', [
    'uses'=>'ProductController@detail',
    'as' => 'product.detail'
]);

Route::post('viewlist', [
    'uses'=>'ProductController@search',
    'as' => 'search.product'
]);

Route::get('editproduct/{id}', [
    'uses'=>'ProductController@edit',
    'as' => 'edit.product'
]);

Route::post('updateproduct', [
    'uses'=>'ProductController@update',
    'as' => 'update.product'
]);
//process payment
Route::post('paypal','PaymentController@payWithpaypal');

//check status
Route::get('status','PaymentController@getPaymentStatus');

Route::get('/template', [
    'uses'=>'ProductController@template',
    'as' => 'template.list'
]);

Route::get('/Productmainpages',function() {
    return view('Productmainpages');
});

Route::get('/contact',function() {
    return view('contact');
});

Route::get('/bikeaccess',function() {
    return view('bikeaccess');
});


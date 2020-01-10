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
Route::get('/','mycontroll@welcome')->name('welcome');

Route::get('/home','categoryController@showAllCat')->name('welcome');
Route::get('/contact','mycontroll@contact');

//categories
Route::get('category/{cat_id}','categoryController@showCat')->name('category');
Route::get('categories','categoryController@showAllCat')->name('categories');
Route::post('category/edit/{cat_id}','categoryController@edit')->name('edit');
Route::get('category/delete/{cat_id}','categoryController@deleteCat')->name('delete');
Route::post('category/Add','categoryController@addCat')->name('Add');
//products
Route::get('category/{cat_id}/products','productController@showProducts')->name('show_products');
Route::post('product/edit/{prod_id}','productController@editProduct')->name('editProd');
Route::post('product/add','productController@addProduct')->name('addProd');
Route::get('product/delete/{prod_id}','productController@deleteProduct')->name('deleteProd');

//Suppliers
Route::get('product/{prod_id}/suppliers','supplierController@showSup')->name('show_sup');
Route::post('suppliers/edit/{id}','supplierController@editSup')->name('edit_sup');
Route::post('suppliers/add/{id}','supplierController@addSup')->name('add_sup');
Route::get('suppliers/delete/{id}','supplierController@deleteSup')->name('delete_sup');
Route::get('suppliers/product/{id}','supplierController@showProd')->name('supp_prod');

//user
Route::get('product/{prod_id}/details','productController@details')->name('details');

//cart
Route::get('cart/add/{prod_id}','cartController@add_product')->name('add_to_cart');
Route::get('cart','cartController@view_cart')->name('ViewCart');
Route::get('cart/{cart_id}/delete','cartController@delete')->name('deletecart');


Auth::routes();

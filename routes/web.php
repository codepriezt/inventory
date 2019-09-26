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

use App\Http\Middleware\user;
use App\Http\Middleware\AdminUser;




    //product
    Route::group(['prefix' => '' , 'middleware' => ['user'] ], function (){
    Route::get('/createproduct' , 'Main\PageController@addProduct')->name('createproduct.index');
    Route::post('/addproduct' , 'ProductController@createProduct')->name('addproduct');
    Route::get('/products' , 'Main\PageController@product')->name('product.index');
    Route::post('/product/{productId}' , 'ProductController@editProduct')->name('product.edit');
    Route::get('/single/product/{id}', 'Main\PageController@singleProduct')->name('singleProduct.index');
    Route::post('/product/status', 'ProductController@updateStatus')->name('status.update');
    Route::post('/product/delete/{productId}' , 'ProductController@deleteProduct')->name('product.delete');
   
   
  

    //category
    Route::get('/addcategory' , 'Main\PageController@addCategory')->name('category.index');
    Route::post('/add' , 'ProductController@addCategory')->name('create.category');
}); 


    
    Route::get('/signup' , 'PageController@signUp')->name('signup.index');
    Route::get('' , 'Main\PageController@index')->name('index.page');
    Route::get('/login' , 'PageController@signIn')->name('login.index');



 
 Route::group(['prefix' => 'admin' ,' middleware' => ['admin']], function (){
 Route::get('/createproduct' , 'Admin\PageController@addProduct')->name('createproduct.index');
 Route::post('/addproduct' , 'ProductController@createProduct')->name('addproduct');
 Route::get('/products' , 'Admin\PageController@product')->name('product.index');
 Route::post('/product/{productId}' , 'ProductController@editProduct')->name('product.edit');
 Route::get('/single/product/{id}', 'Admin\PageController@singleProduct')->name('singleProduct.index');
 Route::post('/product/status', 'ProductController@updateStatus')->name('status.update');
 Route::post('/product/delete/{productId}' , 'ProductController@deleteProduct')->name('product.delete');

 //category
 Route::get('/addcategory' , 'Admin\PageController@addCategory')->name('category.index');
 Route::post('/add' , 'ProductController@addCategory')->name('create.category');

//user
Route::get('/user' , 'Admin\PageController@user')->name('user.index');
Route::get('/user/create' , 'Admin\PageController@addUser')->name('createUser.index');
Route::get('/single/user/{id}', 'Admin\PageController@singleUser')->name('singleUser.index');
Route::post('/add/user' , 'Admin\PageController@addProduct')->name('create.user');
Route::post('/signup' , 'UserController@createNewAdminUser')->name('admin.signup');
Route::post('/delete{userId}' , 'UserController@deleteUser')->name('user.delete');

});

Route::get('admin/login/admin/type' , 'Admin\PageController@signIn')->name('signin.index');
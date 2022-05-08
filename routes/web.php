<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserhomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\PayController;
use App\Http\Controllers\ProductinfoController;
use App\Http\Controllers\SiteController;
use App\Product;
use Illuminate\Support\Facades\Auth;

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
    //Route::get('/', function () {
    //return view('welcome',$data);
    //$data['products']=Product::with('category')->paginate(30);
     //return view('frontend.aulayout.home',$data);

});

//home
route::get('/home', [homeController::class, 'home'])->name('home');
//adminLogin
route::get('/adminRegister', [AdminController::class, 'Rgtr'])->name('adminRegister');
route::post('/adminRegister_smt', [AdminController::class, 'smt'])->name('adminRegister_smt');
route::get('/adminmaster', [AdminController::class, 'adminmaster'])->name('adminmaster');

route::get('/adminLogin', [AdminController::class, 'adminLogin'])->name('adminLogin');
route::post('adminLogin_submit', [AdminController::class, 'submit'])->name('adminLogin.submit');
route::get('/adminLogin_logout', [AdminController::class, 'logout'])->name('adminLogin.logout');





//Route::group(['middleware'=>'auth'],function(){
//   Route::get('home',[LoginController::class,'home'])->name('home');
//   Route::get('logout',[LoginController::class,'logout'])->name('logout');
//});*/
Auth::routes();
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/', function () {
    $data['products']=Product::with('category',)->paginate(30);
    return view('frontend.aulayout.home',$data);
});
Route::get('/home', 'HomeController@index')->name('home');
route::get('/userhome', [UserhomeController::class, 'userhome'])->name('userhome');
//products
route::get('/product', [ProductController::class, 'index'])->name('Product');
Route::get('/productList', [ProductController::class, 'index'])->name('productList');
Route::get('/product_create', [ProductController::class, 'create'])->name('product_create');
Route::get('/product_edit/{id}',[ProductController::class,'edit'])->name('product_edit');
Route::post('/product_store',[ProductController::class,'productstore'])->name('product_store');
Route::post('/product_update/{id}',[ProductController::class,'update'])->name('product_update');
Route::get('/product_delete/{id}',[ProductController::class,'delete'])->name('product_delete');

//joins


route::get('/Categorys', [ProductController::class, 'index'])->name('Category.first');
route::get('/category', [CategoryController::class, 'index'])->name('Category.new');
route::get('/create_category', [CategoryController::class, 'create'])->name('create_category');
Route::get('/category_edit/{id}',[CategoryController::class,'editcategory'])->name('category_edit');
route::post('/store_category', [CategoryController::class, 'store'])->name('store_category');
route::get('/delete_category/{id}', [CategoryController::class, 'delete'])->name('delete_category');
route::post('/update_category/{id}', [CategoryController::class, 'update'])->name('update_category');


route::get('/site_setting', [SiteController::class, 'site'])->name('site_setting');
route::post('/update_site', [SiteController::class, 'updateSetting'])->name('update_site');

//description
route::get('/description', [DescriptionController::class, 'index'])->name('description');
route::get('/des_create', [DescriptionController::class, 'des_create'])->name('des_create');
route::get('/des_edit', [DescriptionController::class, 'des_edit'])->name('des_edit');
route::get('/des_delete', [DescriptionController::class, 'des_delete'])->name('des_delete');
route::post('/des_store', [DescriptionController::class, 'des_store'])->name('des_store');

//booking
route::get('/productDetails', [ProductinfoController::class, 'index'])->name('productDetails');
route::get('/Booking/{id}', [BookController::class, 'Booking'])->name('Booking');

route::post('/Booking_store/{id}', [BookController::class, 'store'])->name('Booking_store');
route::get('/pay',[BookController::class, 'pay'])->name('pay');




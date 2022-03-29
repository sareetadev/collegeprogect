<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserhomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DescriptionController;
use App\Http\Controllers\SiteController;
use App\Product;

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
    //Route::get('/', function () {
       //
        return view('frontend.aulayout.home');

});
//home
route::get('/home',[homeController::class,'home'])->name('home');
//adminLogin
route::get('/adminRegister',[AdminController::class,'Rgtr'])->name('adminRegister');
route::post('/adminRegister_smt',[AdminController::class,'smt'])->name('adminRegister_smt');
route::get('/adminmaster',[AdminController::class,'adminmaster'])->name('adminmaster');

route::get('/adminLogin',[AdminController::class,'adminLogin'])->name('adminLogin');
route::post('adminLogin_submit',[AdminController::class,'submit'])->name('adminLogin.submit');
route::get('/adminLogin_logout',[AdminController::class,'logout'])->name('adminLogin.logout');





//Route::group(['middleware'=>'auth'],function(){
 //   Route::get('home',[LoginController::class,'home'])->name('home');
 //   Route::get('logout',[LoginController::class,'logout'])->name('logout');
//});*/
'Auth'::routes();
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/', function () { return view('home'); })->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
route::get('/userhome',[UserhomeController::class,'userhome'])->name('userhome');
//joins

route::get('/Product',[ProductController::class,'Product'])->name('Product');
route::get('/Category',[ProductController::class,'Category'])->name('Category');
Route::get('/productList',[ProductController::class,'index'])->name('productList');
Route::get('/category',function(){
    return view('backend.layouts.category');
    })->name('category');
    route::get('/create',[ProductController::class,'create'])->name('create');
    Route::get('/edit-product/{id}', 'product@edit');


    route::get('/site',[SiteController::class,'site'])->name('site');
    route::post('/update_site',[SiteController::class,'updateSite'])->name('update.site');
    route::get('/description',[DescriptionController::class,'description'])->name('description');
    //route::post('/update_site',[SiteController::class,'updateSite'])->name('update.site');

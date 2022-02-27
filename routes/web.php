<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserhomeController;


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
        return view('frontend.home');

});
//home
route::get('/home',[homeController::class,'home'])->name('home');
//adminLogin
route::get('/adminLogin',[AdminController::class,'adminLogin'])->name('adminLogin');
route::post('adminLogin_submit',[AdminController::class,'submit'])->name('adminLogin.submit');
route::get('/adminLogin_logout',[AdminController::class,'logout'])->name('adminLogin.logout');

//registeration
/*route::get('/registration',[RegistrationController::class,'registration'])->name('registration.form');
route::post('/registration',[RegistrationController::class,'reg_submit'])->name('reg.submit');
Route::group(['middleware'=>'guest'],function(){
    Route::get('login',[LoginController::class,'login'])->name('login');
    Route::post('login',[LoginController::class,'submit'])->name('login')->middleware('throttle:2,1');

    Route::get('register',[LoginController::class,'register'])->name('register');
    Route::post('register',[LoginController::class,'registered'])->name('register')->middleware('throttle:2,1');
});




//Route::group(['middleware'=>'auth'],function(){
 //   Route::get('home',[LoginController::class,'home'])->name('home');
 //   Route::get('logout',[LoginController::class,'logout'])->name('logout');
//});*/
'Auth'::routes();
Route::get('/logout', 'LoginController@logout')->name('logout');

//Route::post('/logout', 'LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
//Route::post('/home', 'HomeController@index')->name('home');
//userhomepage
route::get('/userhome',[UserhomeController::class,'userhome'])->name('userhome');
//joins
route::get('/Product',[ProductController::class,'Product'])->name('Product');
route::get('/Category',[ProductController::class,'Category'])->name('Category');

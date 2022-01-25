<?php
use App\Http\Controllers\StaffController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\user\BookingController;
use App\Http\Controllers\user\LoginController;
use App\Http\Controllers\user\HomeController;

use Illuminate\Support\Facades\Route;

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
Route::group(['prefix'=>'admin'],function (){
Route::get('/login',[UserController::class,'login'])->name('welcome.admin.login');
Route::post('/login',[UserController::class,'dologin'])->name('welcome.admin.dologin');
Route::group(['middleware'=>['auth','admin']],function(){
Route::get('/', function () {
    
    return view('welcome');
})->name('welcome.admin');
//staff
Route::get('/Staff',[StaffController::class,'ProductM']);
Route::get('/Staff/AddStaff',[StaffController::class,'Addstaff'])->name('staff.Addstaff');
Route::get('/Staff/Stafflist',[StaffController::class,'StafflistU'])->name('staff.staffList');
Route::post('/staff/addstaff',[StaffController::class,'staffadd'])->name('staff.post.add');
//service//catering
Route::get('/cateringdetails/{cate_id}',[ServiceController::class,'viewCatering'])->name('admin.view.catering');
Route::get('/cateringdelete/{cate_id}',[ServiceController::class,'deletecatering'])->name('admin.delete.catering');
Route::get('/cateringedit/{cate_id}',[ServiceController::class,'editcatering'])->name('admin.edit.catering');
Route::PUT('/catering/update/{cate_id}',[ServiceController::class,'updateCatering'])->name('admin.update.catering');

//service//decoration
Route::get('/decorationadd',[ServiceController::class,'decorationadd'])->name('admin.service.decorationadd');
Route::get('/decorationlist',[ServiceController::class,'decorationlist'])->name('admin.service.decorationlist');
Route::post('/decorationlist',[ServiceController::class,'decorationstore'])->name('admin.service.Servicestore');
//service//photography
Route::get('/photographyadd',[ServiceController::class,'photographyadd'])->name('admin.service.photpgraphyadd');
Route::get('/photographylist',[ServiceController::class,'photographylist'])->name('admin.service.photpgraphylist');
Route::post('/photostore',[ServiceController::class,'photostore'])->name('admin.service.photostore');
//TypeTable
Route::get('/Typetable',[ServiceController::class,'TypeTable'])->name('admin.service.TypeTable');
Route::get('/Typetablelist',[ServiceController::class,'TypeList'])->name('admin.service.TypeList');
Route::post('/Typetablestore',[ServiceController::class,'TypeStore'])->name('admin.service.TypeStore');
//user
Route::get('/user',[UserController::class,'userlist'])->name('welcome.user');
Route::get('/logout',[UserController::class,'logout'])->name('welcome.admin.logout');
//event
Route::get('/event',[EventController::class,'eventM'])->name('event');
Route::get('/dashboard/form',[EventController::class,'form'])->name('form');
Route::get('/accounts',[EventController::class,'accounts'])->name('accountform');
Route::post('/dashboard/store',[EventController::class,'storeE'])->name('eventlist');
Route::get('/event/eventlist', [EventController:: class, 'Evenlist'])->name('event.eventlist');
Route::get('/event/addevent',[EventController::class,'addevent'])->name('event.add');
Route::get('/event/addlist',[EventController::class,'addlist'])->name('event.addlist');
Route::post('event/add/event',[EventController::class,'eventaddlist'])->name('event.add.list');

});
});

//// website

Route::group(['prefix'=>'website'],function (){
Route::get('/',[HomeController::class,'home'])->name('frontend');
Route::group(['middleware'=>'web_auth'],function(){
Route::get('/add-to-booking/{id}',[BookingController::class,'AddBooking'])->name('website.booking.add');
Route::get('cart-get',[BookingController::class,'getcart'])->name('website.cart.get');    
Route::get('cart-clear',[BookingController::class,'Clearbook'])->name('website.cart.clear');    
});

Route::get('booking/eventbooking',[BookingController::class,'eventbook'])->name('booking.eventbook');
Route::get('registration',[LoginController::class,'inputregistration'])->name('website.registration');
Route::post('registration/form',[LoginController::class,'userregistration'])->name('website.registration.form');
Route::post('user/login',[LoginController::class,'userlogin'])->name('websitw.user.login');
Route::get('user/logout',[LoginController::class,'userlogout'])->name('website.user.logout');
Route::get('user/weddings',[EventController::class,'Weddings'])->name('website.wedding.list');
//website service
Route::get('user/catering/{service_id}',[ServiceController::class,'Caterings'])->name('website.catering.list');
Route::get('user/decoration',[ServiceController::class,'Decoration'])->name('website.decoration.list');
Route::get('user/photography',[ServiceController::class,'Photograph'])->name('website.photograph.list');
});

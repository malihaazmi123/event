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
Route::PUT('/staff/update/{id}',[StaffController::class,'staffupdate'])->name('admin.staff.update');
Route::get('/staff/edit/{id}',[StaffController::class,'staffedit'])->name('admin.staff.edit');
Route::get('/staff/delete/{id}',[StaffController::class,'staffdelete'])->name('admin.staff.delete');
//servicetable
Route::get('/cateringdetails/{cate_id}',[ServiceController::class,'viewCatering'])->name('admin.view.catering');
Route::get('/cateringdelete/{cate_id}',[ServiceController::class,'deletecatering'])->name('admin.delete.catering');
Route::get('/cateringedit/{cate_id}',[ServiceController::class,'editcatering'])->name('admin.edit.catering');
Route::PUT('/catering/update/{cate_id}',[ServiceController::class,'updateCatering'])->name('admin.update.catering');
Route::get('/Serviceadd',[ServiceController::class,'Serviceadd'])->name('admin.service.decorationadd');
Route::get('/servicelist',[ServiceController::class,'Servicelist'])->name('admin.service.decorationlist');
Route::post('/servicestore',[ServiceController::class,'Servicestore'])->name('admin.service.Servicestore');
//TypeTable
Route::get('/Typetable',[ServiceController::class,'TypeTable'])->name('admin.service.TypeTable');
Route::get('/Typetablelist',[ServiceController::class,'TypeList'])->name('admin.service.TypeList');
Route::post('/Typetablestore',[ServiceController::class,'TypeStore'])->name('admin.service.TypeStore');
//booking
Route::get('bookingdetails',[BookingController::class,'Bookinglist'])->name('admin.booking.list');  
Route::get('bookingview/{id}',[BookingController::class,'Bookingview'])->name('admin.booking.view');  
Route::get('bookingcancel/{id}',[BookingController::class,'BookingCancel'])->name('admin.booking.cancel');  
//user
Route::get('/user',[UserController::class,'userlist'])->name('welcome.user');
Route::get('/logout',[UserController::class,'logout'])->name('welcome.admin.logout');
//event
Route::get('/dashboard/form',[EventController::class,'form'])->name('form');
Route::get('/accounts',[EventController::class,'accounts'])->name('accountform');
Route::get('/event/addevent',[EventController::class,'addevent'])->name('event.add');
Route::get('/event/addlist',[EventController::class,'addlist'])->name('event.addlist');
Route::post('event/add/event',[EventController::class,'eventaddlist'])->name('event.add.list');
Route::get('eventdelete/{id}',[EventController::class,'eventdelete'])->name('event.add.eventdelete');
Route::get('eventedit/{id}',[EventController::class,'eventedit'])->name('event.add.eventedit');
Route::PUT('eventupdate/{id}',[EventController::class,'eventupdate'])->name('event.add.eventupdate');
Route::get('/dashboard',[HomeController::class,'Dashboard'])->name('admin.dashboard');
});
});

//// website

Route::group(['prefix'=>'website'],function (){
Route::get('/',[HomeController::class,'home'])->name('frontend');
Route::group(['middleware'=>'web_auth'],function(){
Route::get('/add-to-booking/{id}',[BookingController::class,'AddBooking'])->name('website.booking.add');
Route::get('cart-get',[BookingController::class,'getcart'])->name('website.cart.get');    
Route::get('cart-clear',[BookingController::class,'Clearbook'])->name('website.cart.clear');    
Route::get('cart-checkout',[BookingController::class,'Checkout'])->name('website.cart.checkout');    
Route::get('Addto cart',[BookingController::class,'AddCart'])->name('website.cart.addcartdata');    
});

Route::get('registration',[LoginController::class,'inputregistration'])->name('website.registration');
Route::post('registration/form',[LoginController::class,'userregistration'])->name('website.registration.form');
Route::post('user/login',[LoginController::class,'userlogin'])->name('websitw.user.login');
Route::get('user/logout',[LoginController::class,'userlogout'])->name('website.user.logout');
Route::get('user/weddings',[EventController::class,'Eventshow'])->name('website.wedding.list');
//website service
Route::get('user/catering/{service_id}',[ServiceController::class,'Servecing'])->name('website.catering.list');



//profile

route::get('/profile/{user_id}',[UserController::class,'profile_view'])->name('profile.view');

});

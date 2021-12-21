<?php
use App\Http\Controllers\StaffController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\user\BookingController;
use App\Http\Controllers\user\LoginController;
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

Route::get('/admin', function () {
    return view('welcome');
});
Route::get('/Staff',[StaffController::class,'ProductM']);
Route::get('/Staff/AddStaff',[StaffController::class,'Addstaff'])->name('staff.Addstaff');
Route::get('/Staff/Stafflist',[StaffController::class,'StafflistU'])->name('staff.staffList');
Route::post('/staff/addstaff',[StaffController::class,'staffadd'])->name('staff.post.add');
Route::get('/service',[ServiceController::class,'serviceM']);
Route::get('/user',[UserController::class,'userlist'])->name('welcome.user');
Route::get('/event',[EventController::class,'eventM'])->name('event');
Route::get('/dashboard/form',[EventController::class,'form'])->name('form');
Route::get('/admin/accounts',[EventController::class,'accounts'])->name('accountform');
Route::post('/dashboard/store',[EventController::class,'storeE'])->name('eventlist');
Route::get('/event/eventlist', [EventController:: class, 'Evenlist'])->name('event.eventlist');
Route::get('/event/addevent',[EventController::class,'addevent'])->name('event.add');
Route::get('/event/addlist',[EventController::class,'addlist'])->name('event.addlist');
Route::post('event/add/event',[EventController::class,'eventaddlist'])->name('event.add.list');



//// website


Route::get('/', function () {
    return view('website.content');
})->name('frontend');

Route::get('booking/eventbooking',[BookingController::class,'eventbook'])->name('booking.eventbook');
Route::get('registration',[LoginController::class,'inputregistration'])->name('website.registration');
Route::post('registration/form',[LoginController::class,'userregistration'])->name('website.registration.form');
Route::post('user/login',[LoginController::class,'userlogin'])->name('websitw.user.login');
Route::get('user/logout',[LoginController::class,'userlogout'])->name('website.user.logout');
Route::get('user/weddings',[EventController::class,'Weddings'])->name('website.wedding.list');

<?php
use App\Http\Controllers\StaffController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\EventController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Staff',[StaffController::class,'ProductM']);
Route::get('/Staff/AddStaff',[StaffController::class,'Addstaff'])->name('staff.Addstaff');
Route::get('/Staff/Stafflist',[StaffController::class,'StafflistU'])->name('staff.staffList');
Route::post('/staff/addstaff',[StaffController::class,'staffadd'])->name('staff.post.add');
Route::get('/report/dailyreport',[reportController::class,'reportM'])->name('profile');
Route::get('/service',[ServiceController::class,'serviceM']);
Route::get('/report/weeklyreport',[reportController::class,'weekly'])->name('weekly');
Route::get('/event',[EventController::class,'eventM'])->name('event');
Route::get('/dashboard/form',[EventController::class,'form'])->name('form');
Route::get('/admin/accounts',[EventController::class,'accounts'])->name('accountform');
Route::post('/dashboard/store',[EventController::class,'storeE'])->name('eventlist');
Route::get('/event/eventlist', [EventController:: class, 'Evenlist'])->name('event.eventlist');



//// website


Route::get('/home', function () {
    return view('website.master');
});

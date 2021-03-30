<?php
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\PurchaseController;
use App\Http\Controllers\Backend\CashmemoController;
use App\Http\Controllers\Backend\RegistrationController;
use App\Http\Controllers\Backend\AuthController;
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
    return view('backend.master');
});
//Authentication
route::get('/login',[AuthController::class,'showlogin'])->name('login');
//route::post('/login',[AuthController::class,'processlogin']);
//route::get('/register',[AuthController::class,'showregister'])->name('register');
route::post('/register',[AuthController::class,'processregister'])->name('register');
//Dashboard

Route::get('/dashboard',[HomeController::class,'home'])->name('home');

//PurchaseItems

Route::get('/purchase',[PurchaseController::class,'purchase'])->name('purchase');
Route::get('/purchase/add',[PurchaseController::class,'add'])->name('add');
Route::post('/purchase/add',[PurchaseController::class,'create'])->name('purchase.create');

//Cash Memo

Route::get('/cashmemo',[CashmemoController::class,'cashmemo'])->name('cashmemo');
Route::get('/cashmemo/create',[CashmemoController::class,'create'])->name('memo.create');
Route::post('/cashmemo/create',[CashmemoController::class,'sends'])->name('memocreate');

//Registrations
Route::get('/registrations/customerregistration',[RegistrationController::class,'customerregistration'])->name('customerregistration');
Route::post('/registrations/customerregistration',[RegistrationController::class,'createcustomer'])->name('customerregistration.create');
Route::get('customer',[RegistrationController::class,'customer'])->name('customer');
Route::get('/registrations/employeeregistration',[RegistrationController::class,'employeeregistration'])->name('employeeregistration');

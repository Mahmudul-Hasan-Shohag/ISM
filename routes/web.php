<?php
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\StockController;
use App\Http\Controllers\Backend\PurchaseController;
use App\Http\Controllers\Backend\RegistrationController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\AttendanceController;
use App\Http\Controllers\Backend\CashmemoController;
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



Route::group(['prefix'=>'admin'],function(){

    Route::get('/', function () {
        return view('backend.master');
    });
//Dashboard

Route::get('/dashboard',[HomeController::class,'home'])->name('home');

//Categories

Route::get('/products/categories',[CategoryController::class,'showcategory'])->name('category.show');
Route::get('/products/categoryform',[CategoryController::class,'categoryform'])->name('category.form');
Route::post('/products/categorycreate',[CategoryController::class,'createcategory'])->name('category.create');

//products
Route::get('products/producttable',[ProductController::class,'showproduct'])->name('product.show');
Route::get('products/productform',[ProductController::class,'productform'])->name('product.form');
Route::post('products/productcreate',[ProductController::class,'createproduct'])->name('product.create');

//Stocks
Route::get('products/stocktable',[StockController::class,'showstock'])->name('stock.show');

//PurchaseItems

Route::get('/purchase',[PurchaseController::class,'purchase'])->name('purchase');
Route::get('/purchase/add',[PurchaseController::class,'add'])->name('add');
Route::post('/purchase/add',[PurchaseController::class,'create'])->name('purchase.create');
Route::delete('/purchase/delete/{id}',[PurchaseController::class,'destroy'])->name('purchase.delete');


//Registrations
Route::get('/registrations/customerregistration',[RegistrationController::class,'customerregistration'])->name('customerregistration');
Route::post('/registrations/customerregistration',[RegistrationController::class,'createcustomer'])->name('customerregistration.create');
Route::get('customer',[RegistrationController::class,'customer'])->name('customer');

Route::get('/registrations/employeeregistration',[RegistrationController::class,'employeeregistration'])->name('employeeregistration');
Route::post('/registrations/employeeregistration',[RegistrationController::class,'createemployee'])->name('employeeregistration.create');
Route::get('/employee/employeeinfo',[RegistrationController::class,'employeeinfo'])->name('employeeinfo');

Route::get('employee/attendance',[RegistrationController::class,'showattendance'])->name('attendance.show');
Route::get('employee/attendancesubmit',[RegistrationController::class,'submitattendance'])->name('attendance.submit');  
Route::post('employee/attendancecreate',[RegistrationController::class,'createattendance'])->name('attendance.create');  

//Orders
Route::get('order/ordershow',[ OrderController::class,'showorder'])->name('order.show');
Route::get('order/ordersubmit',[ OrderController::class,'orderform'])->name('order.form'); 

//Attendance
Route::get('employee/attendance',[AttendanceController::class,'showattendance'])->name('attendance.show');
Route::get('employee/attendancesubmit',[AttendanceController::class,'submitattendance'])->name('attendance.submit');  
Route::post('employee/attendancecreate',[AttendanceController::class,'createattendance'])->name('attendance.create');  

//Cashmemo
Route::get('/cashmemo/viewcashmemo',[CashmemoController::class,'showcashmemo'])->name('cashmemo.show');
Route::get('/cahmemo/form',[CashmemoController::class,'cashmemoform'])->name('cashmemo.form');
Route::get('/cahmemo/view/{id}',[CashmemoController::class,'cashmemoview'])->name('cashmemo.view');
Route::post('/cashmemo/create',[CashmemoController::class,'cashmemocreate'])->name('cashmemo.create');
});

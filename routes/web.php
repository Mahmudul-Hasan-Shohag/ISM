<?php

use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\PurchaseController;
use App\Http\Controllers\Backend\PurchasecategoryController;
use App\Http\Controllers\Backend\RegistrationController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\SalaryController;
use App\Http\Controllers\Backend\MonthController;
use App\Http\Controllers\Backend\CashmemoController;
use App\Http\Controllers\Backend\AdminController;
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
// Route::get('/', function () {
//     return view('home');
// });

 //Dashboard
 Route::get('/',[HomeController::class,'home'])->name('home');
 Route::post('dashboard/product/search',[HomeController::class,'search'])->name('dashboard.product.search');     

//Backend
//login
Route::get('/login',[AdminController::class,'adminlogin'])->name('admin.login');
Route::post('/postlogin',[AdminController::class,'postadminlogin'])->name('postadminlogin');
Route::get('/adminlogout',[AdminController::class,'adminlogout'])->name('admin.logout');

    Route::group(['prefix'=>'admin'],function(){
        Route::group(['middleware'=>'auth'],function(){
            
        //Categories
        
        Route::get('/products/categories',[CategoryController::class,'showcategory'])->name('category.show');
        Route::get('/products/categoryform',[CategoryController::class,'categoryform'])->name('category.form');
        Route::post('/products/categorycreate',[CategoryController::class,'createcategory'])->name('category.create');
        
        //products
        Route::get('products/producttable',[ProductController::class,'showproduct'])->name('product.show');
        Route::get('products/productform',[ProductController::class,'productform'])->name('product.form');
        Route::post('products/productcreate',[ProductController::class,'createproduct'])->name('product.create');
        Route::get('products/under/categories{id}',[ProductController::class,'productcategories'])->name('product.categories');
        //search
        Route::post('products/search',[ProductController::class,'productsearch'])->name('product.search');
        //PurchaseItems
        
        Route::get('/purchase',[PurchaseController::class,'purchase'])->name('purchase');
        Route::get('/purchase/add',[PurchaseController::class,'add'])->name('add');
        Route::post('/purchase/add',[PurchaseController::class,'create'])->name('purchase.create');
        Route::delete('/purchase/delete/{id}',[PurchaseController::class,'destroy'])->name('purchase.delete');
        //purchase category
        Route::get('/purchasecategory',[purchasecategoryController::class,'category'])->name('purchase.category');
        Route::get('/purchasecategoryform',[purchasecategoryController::class,'categoryform'])->name('purchasecategory.form');
        Route::post('/postpurchasecategory',[purchasecategoryController::class,'postpurchasecategory'])->name('post.purchasecategory');
        
        //Customer
        Route::get('/registrations/customerregistration',[RegistrationController::class,'customerregistration'])->name('customerregistration');
        Route::post('/registrations/customerregistration',[RegistrationController::class,'createcustomer'])->name('customerregistration.create');
        Route::get('/customer',[RegistrationController::class,'customer'])->name('customer');
        Route::post('/customer/search',[RegistrationController::class,'customersearch'])->name('customer.search');
        Route::get('/customer/delete{id}',[RegistrationController::class,'customerdelete'])->name('customer.delete');
        //Employees
        Route::get('/registrations/employeeregistration',[RegistrationController::class,'employeeregistration'])->name('employeeregistration');
        Route::post('/registrations/employeeregistration',[RegistrationController::class,'createemployee'])->name('employeeregistration.create');
        Route::get('/employee/employeeinfo',[RegistrationController::class,'employeeinfo'])->name('employeeinfo');
        Route::get('/employee/delete{id}',[RegistrationController::class,'employeedelete'])->name('employee.delete');
        Route::post('/employee/list/search',[RegistrationController::class,'employeesearch'])->name('employee.list.search');
        //Orders
        Route::get('order/ordershow',[ OrderController::class,'showorder'])->name('order.show');
        Route::get('order/details',[ OrderController::class,'orderdetails'])->name('order.details');
        Route::get('order/view{id}',[ OrderController::class,'orderview'])->name('order.view');
        Route::get('order/process{id}',[ OrderController::class,'orderprocess'])->name('order.process');
        Route::put('order/confirm{id}',[ OrderController::class,'orderconfirm'])->name('order.confirm');
        Route::get('update/invoice{id}',[ OrderController::class,'updateinvoice'])->name('update.invoice');
        //cart
        Route::get('add-to-cart{id}',[ OrderController::class,'addTocart'])->name('cart');
        Route::get('view/cart',[ OrderController::class,'viewcart'])->name('cart.view');
        Route::get('view/cart',[ OrderController::class,'viewcart'])->name('cart.view');
        Route::post('update/cart{rowId}',[ OrderController::class,'updatecart'])->name('cart.update');
        Route::get('remove/cart{rowId}',[ OrderController::class,'removecart'])->name('cart.remove');
        //invoice
        Route::post('create/invoice',[ OrderController::class,'createinvoice'])->name('create.invoice');
        Route::post('create/final/invoice',[ OrderController::class,'createFinalInvoice'])->name('create.final.invoice');
        //Salary
        Route::get('/viewsalary',[SalaryController::class,'viewsalary'])->name('salary.view');
        Route::get('/salaryform',[SalaryController::class,'salaryform'])->name('salary.form');
        Route::post('/salarycreate',[SalaryController::class,'salarycreate'])->name('salary.create');
        Route::post('/employee/search',[SalaryController::class,'employeesearch'])->name('employee.search');
        Route::get('salary/month{id}',[SalaryController::class,'salarymonth'])->name('salary.month');
        //MonthController
        Route::get('/monthform',[MonthController::class,'monthform'])->name('month.form');
        Route::get('/month/view',[MonthController::class,'monthview'])->name('month.view');
        Route::post('/create/month',[MonthController::class,'createmonth'])->name('month.create');
       

        });

    
});



    


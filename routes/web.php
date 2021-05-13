<?php

use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\PurchaseController;
use App\Http\Controllers\Backend\PurchasecategoryController;
use App\Http\Controllers\Backend\RegistrationController;
use App\Http\Controllers\Backend\SupplierController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\SalesController;
use App\Http\Controllers\Backend\SalaryController;
use App\Http\Controllers\Backend\ReportController;
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
        Route::get('/products/category/delete{id}',[CategoryController::class,'categorydelete'])->name('category.delete');
        Route::get('/products/category/edit{id}',[CategoryController::class,'categoryedit'])->name('category.edit');
        Route::put('/products/category/update{id}',[CategoryController::class,'categoryupdate'])->name('category.update');
        //products
        Route::get('products/producttable',[ProductController::class,'showproduct'])->name('product.show');
        Route::get('products/productform',[ProductController::class,'productform'])->name('product.form');
        Route::post('products/productcreate',[ProductController::class,'createproduct'])->name('product.create');
        Route::post('products/search',[ProductController::class,'productsearch'])->name('product.search');
        Route::get('products/delete{id}',[ProductController::class,'productdelete'])->name('product.delete');
        Route::get('products/under/categories{id}',[ProductController::class,'productcategories'])->name('product.categories');
        Route::get('products/edit{id}',[ProductController::class,'productedit'])->name('product.edit');
        Route::put('products/update{id}',[ProductController::class,'productupdate'])->name('product.update');
        //PurchaseItems
        
        Route::get('/purchase',[PurchaseController::class,'purchase'])->name('purchase');
        Route::get('/purchase/add',[PurchaseController::class,'add'])->name('add');
        Route::get('/purchase/category/show{id}',[PurchaseController::class,'purchasecategory'])->name('purchase.category.show');
        Route::post('/purchase/add',[PurchaseController::class,'create'])->name('purchase.create');
        Route::get('/purchase/delete/{id}',[PurchaseController::class,'purchasedelete'])->name('purchase.delete');
        Route::get('/purchase/edit/{id}',[PurchaseController::class,'purchaseedit'])->name('purchase.edit');
        Route::put('/purchase/update/{id}',[PurchaseController::class,'purchaseupdate'])->name('purchase.update');
        //purchase category
        Route::get('/purchase/category',[purchasecategoryController::class,'category'])->name('purchase.category');
        Route::get('/purchase/category/form',[purchasecategoryController::class,'categoryform'])->name('purchasecategory.form');
        Route::post('/postpurchase/category',[purchasecategoryController::class,'postpurchasecategory'])->name('post.purchasecategory');
        Route::get('/purchase/category/delete{id}',[purchasecategoryController::class,'categorydelete'])->name('purchase.category.delete');
        Route::get('/purchase/category/edit{id}',[purchasecategoryController::class,'categoryedit'])->name('purchase.category.edit');
        Route::put('/purchase/category/update{id}',[purchasecategoryController::class,'categoryupdate'])->name('purchase.category.update');
        //Customer
        Route::get('/registrations/customerregistration',[RegistrationController::class,'customerregistration'])->name('customerregistration');
        Route::post('/registrations/customerregistration',[RegistrationController::class,'createcustomer'])->name('customerregistration.create');
        Route::get('/customer',[RegistrationController::class,'customer'])->name('customer');
        Route::post('/customer/search',[RegistrationController::class,'customersearch'])->name('customer.search');
        Route::get('/customer/delete{id}',[RegistrationController::class,'customerdelete'])->name('customer.delete');
        Route::get('/customer/edit{id}',[RegistrationController::class,'customeredit'])->name('customer.edit');
        Route::put('/customer/update{id}',[RegistrationController::class,'customerupdate'])->name('customer.update');
        //Employees
        Route::get('/registrations/employeeregistration',[RegistrationController::class,'employeeregistration'])->name('employeeregistration');
        Route::post('/registrations/employeeregistration',[RegistrationController::class,'createemployee'])->name('employeeregistration.create');
        Route::get('/employee/employeeinfo',[RegistrationController::class,'employeeinfo'])->name('employeeinfo');
        Route::get('/employee/delete{id}',[RegistrationController::class,'employeedelete'])->name('employee.delete');
        Route::get('/employee/edit{id}',[RegistrationController::class,'employeeedit'])->name('employee.edit');
        Route::put('/employee/update{id}',[RegistrationController::class,'employeeupdate'])->name('employee.update');
        Route::post('/employee/list/search',[RegistrationController::class,'employeesearch'])->name('employee.list.search');
        //Suppliers
        Route::get('/supplier/show',[SupplierController::class,'suppliershow'])->name('supplier.show');
        Route::get('/supplier/form',[SupplierController::class,'supplierform'])->name('supplier.form');
        Route::post('/supplier/create',[SupplierController::class,'suppliercreate'])->name('supplier.create');
        Route::get('/supplier/delete{id}',[SupplierController::class,'supplierdelete'])->name('supplier.delete');
        Route::get('/supplier/edit{id}',[SupplierController::class,'supplieredit'])->name('supplier.edit');
        Route::put('/supplier/update{id}',[SupplierController::class,'supplierupdate'])->name('supplier.update');
        Route::post('/suppliers/search',[SupplierController::class,'suppliersearch'])->name('supplier.search');
        //Orders
        Route::get('order/ordershow',[ OrderController::class,'showorder'])->name('order.show');
        Route::get('order/details',[ OrderController::class,'orderdetails'])->name('order.details');
        Route::get('order/view{id}',[ OrderController::class,'orderview'])->name('order.view');
        Route::get('order/process{id}',[ OrderController::class,'orderprocess'])->name('order.process');
        Route::get('sell/confirm{id}',[ OrderController::class,'sellconfirm'])->name('sell.confirm');
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
        
       //sales
        Route::get('/sales',[SalesController::class,'sales'])->name('sales');

        //Report
        Route::get('/report/purchase',[ReportController::class,'purchasereport'])->name('purchase.report');
        Route::get('/report/orders',[ReportController::class,'ordersreport'])->name('orders.report');
        });

    
});



    


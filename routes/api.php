<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\SupplierController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ExpenseController;
use App\Http\Controllers\Api\SalaryController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\PosController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\OrderController;
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/signup', [AuthController::class, 'signup']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::post('/me', [AuthController::class, 'me']);
});




 Route::resource('/employee', EmployeeController::class);
 Route::resource('/supplier', SupplierController::class);
 Route::resource('/category', CategoryController::class);
 Route::resource('/product', ProductController::class);
 Route::resource('/expense', ExpenseController::class);
 Route::resource('/customer', CustomerController::class);

 

 Route::post('/salary/paid/{id}', [SalaryController::class, 'paid']);
 Route::GET('/salary', [SalaryController::class, 'AllSalary']);
 Route::GET('/salary/view/{id}', [SalaryController::class, 'ViewSalary']);
 Route::GET('/edit/salary/{id}', [SalaryController::class, 'EditSalary']);
 Route::Post('/update/salary/{id}', [SalaryController::class, 'SalaryUpdate']);
 Route::post('/stock/update/{id}', [ProductController::class, 'StockUpdate']);
 Route::Get('/getting/product/{id}', [PosController::class, 'GetProduct']);
 Route::Get('/addToCart/{id}', [CartController::class, 'AddToCart']);
 Route::Get('/cart/product', [CartController::class, 'CartProduct']);
 Route::Get('/remove/cart/{id}', [CartController::class, 'removeCart']);
 Route::Get('/increment/{id}', [CartController::class, 'increment']);
 Route::Get('/decrement/{id}', [CartController::class, 'decrement']);
 Route::Get('/vats', [CartController::class, 'Vats']); 
 Route::Post('/orderdone', [PosController::class, 'OrderDone']); 
 Route::Get('/orders', [OrderController::class, 'TodayOrder']); 
 Route::Get('/order/details/{id}', [OrderController::class, 'OrderDetails']); 
 Route::Get('/order/orderdetails/{id}', [OrderController::class, 'OrderDetailsAll']); 
 Route::Get('/order/orderdetails/{id}', [OrderController::class, 'OrderDetailsAll']); 
 Route::Post('/search/order', [PosController::class, 'SearchOrderDate']); 
 Route::Get('/today/sell', [PosController::class, 'TodaySell']); 
 Route::Get('/today/income', [PosController::class, 'TodayIncome']); 
 Route::Get('/today/due', [PosController::class, 'TodayDue']); 
 Route::Get('/today/expense', [PosController::class, 'TodayExpense']); 
 Route::Get('/today/stockout', [PosController::class, 'Stockout']); 



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\RetrieveSuppliersController;
use App\Http\Controllers\deleteSupplier;
use App\Http\Controllers\EditSupplierController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DrugsController;
use App\Http\Controllers\salesController;
use App\Http\Controllers\CompanyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cashier-login', function () {
    return view('cashier-login');
})->name('cashier-login');

Route::post("save-sales", [salesController::class, 'saveSales']);

Route::post("welcome", [AdminController::class, 'validateFormData']);

Route::post("cashierLogin", [CashierController::class, 'validateFormData']);

Route::get('admin-index', [AdminController::class, 'display'])->name('admin-index');

Route::get('report', [AdminController::class, 'report'])->name('report');

Route::get('sales-detail', [AdminController::class, 'seeSales'])->name('sales-detail');

Route::get('cashierIndex', [salesController::class, 'onDashboard'])->name('cashier-index');

Route::get('supplier', [RetrieveSuppliersController::class, 'showSuppliers'])->name('supplier');

Route::get('add-drugs', [DrugsController::class, 'dropDown'])->name('add-medicine');

Route::get('add-sale', [salesController::class, 'showMeds'])->name('cashier-sales');

Route::get('medicine2', [DrugsController::class, 'showDrugs'])->name('medicine');

Route::get('dailySales', [salesController::class, 'showDailySales'])->name('cashier-daily-sales');

Route::get('cashiers', [CashierController::class, 'showCashiers'])->name('cashier');

Route::get('categories', [CategoryController::class, 'showCategories'])->name('category');

Route::get('deleteSupplier/{id}', [deleteSupplier::class, 'removeSupplier']);

Route::get('deleteMedicine/{id}', [DrugsController::class, 'removeDrug']);

Route::get('deleteCashier/{id}', [CashierController::class, 'removeCashier']);

Route::get('deleteCategory/{id}', [CategoryController::class, 'removeCategory']);

Route::get('deleteSale/{id}', [salesController::class, 'removeSale']);

Route::get('editSupplier/{id}', [deleteSupplier::class, 'showSavedData']);

Route::get('editMedicine/{id}', [DrugsController::class, 'showSavedData']);

Route::get('editCashier/{id}', [CashierController::class, 'showSavedData']);

Route::get('editCategory/{id}', [CategoryController::class, 'showSavedData']);

Route::get('editSale/{id}', [salesController::class, 'showSavedData']);

Route::post('edit-supplier', [EditSupplierController::class, 'editSupplierInfo']);

Route::post('edit-sale', [salesController::class, 'editSaleInfo']);

Route::post('edit-cashier', [CashierController::class, 'editCashierInfo']);

Route::post('edit-medicine', [DrugsController::class, 'editDrugInfo']);

Route::post('edit-category', [CategoryController::class, 'editCategoryInfo']);

Route::post('add-supplier', [SupplierController::class, 'addSupplier']);

Route::post('add-cashier', [CashierController::class, 'addCashier']);

Route::post('add-medicine', [DrugsController::class, 'addDrug']);

Route::post('add-category', [CategoryController::class, 'addCategory']);

Route::post('update-company', [CompanyController::class, 'saveCompanyDetails']);

Route::get('/edit-supplier', function () {
    return view('edit-supplier');
})->name('edit-supplier');

Route::get('/login', function () {
    return view('welcome');
})->name('login');

Route::get('/add-cashier', function () {
    return view('add-cashier');
})->name('add-cashier');

Route::get('/add-category', function () {
    return view('add-category');
})->name('add-category');



Route::get('/add-supplier', function () {
    return view('add-supplier');
})->name('add-supplier');

Route::get('/admin-sales', function () {
    return view('admin-sales');
})->name('admin-sales');


Route::get('/cashier-index', function () {
    return view('cashier-index');
})->name('cashier-index');

Route::get('/cashier-profile', function () {
    return view('cashier-profile');
})->name('cashier-profile');

Route::get('/cashier-sales', function () {
    return view('cashier-sales');
})->name('cashier-sales');


Route::get('/company', function () {
    return view('company');
})->name('company');






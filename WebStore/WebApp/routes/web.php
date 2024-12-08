<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('welcome');
});
// Cach 1 - Router = Dinh tuyen => Route::get('/path_view', [NameController::class, 'actionName']);
// Route for brand
Route::get('/brand', [BrandController::class, 'index']);
Route::get('/brand/add', [BrandController::class, 'add']);
Route::get('/brand/details/{id}', [BrandController::class, 'details']);
Route::post('/brand/add', [BrandController::class, 'add']);
Route::get('/brand/delete/{id}', [BrandController::class, 'delete']);
Route::get('/brand/edit/{id}', [BrandController::class, 'edit']);
Route::post('/brand/edit/{id}', [BrandController::class, 'edit']);

//Cach 2 - Nhom Route for 
//Route for Category
Route::controller(CategoryController::class)->group(function(){
    Route::get('/category', 'index');
    Route::match(['get', 'post'], '/category/add', 'add');
    Route::match(['get', 'post'], '/category/edit/{id}', 'edit');
    Route::get('/category/delete/{id}', 'delete');
});

//Route Admin
Route::get('/dashboard', [AdminController::class, 'index']);

//Route Upload
Route::controller(UploadController::class)->group(function(){
    Route::get('/upload', 'index');
    Route::match(['get', 'post'], '/upload/add', 'add');
});

//Route product
Route::controller(ProductController::class)->group(function(){
    Route::get('/product', 'index');
    Route::match(['get','post'], '/product/add', 'add');
});
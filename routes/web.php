<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;

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

Route::get('/',[HomeController::class,'index'])->name('home');



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

//    Category---
        Route::resource('/categories/',CategoryController::class);
        Route::get('/cat-status{category}',[CategoryController::class,'changeStatus']);
        Route::get('/category-edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
        Route::post('/category-update/{id}',[CategoryController::class,'update'])->name('category.update');
        Route::post('/category-delete',[CategoryController::class,'destroy'])->name('category-delete');


//     Sub-Category---
        Route::resource('/sub-categories/',SubCategoryController::class);
        Route::get('/subcat-status{subCategory}',[SubCategoryController::class,'changeStatus']);
        Route::get('/sub-category-edit/{id}',[SubCategoryController::class,'edit'])->name('subCategory.edit');
        Route::post('/sub-category-update/{id}',[SubCategoryController::class,'update'])->name('subCategory.update');
        Route::post('/sub-category-delete',[SubCategoryController::class,'destroy'])->name('subCategory.delete');

//        Brand----

        Route::get('/create-brand',[BrandController::class,'create'])->name('create.brand');
        Route::post('/save-brand',[BrandController::class,'saveBrand'])->name('save.brand');
        Route::get('/manage-brand',[BrandController::class,'index'])->name('manage.brand');
        Route::get('/brand-status/{id}',[BrandController::class,'changeStatus'])->name('status.brand');
        Route::get('/edit-brand',[BrandController::class,'editBrand'])->name('edit.brand');
        Route::post('/update-brand/{id}',[BrandController::class,'editBrand'])->name('edit.brand');
        Route::post('/brand-delete',[BrandController::class,'deleteBrand'])->name('delete.brand');

});

<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SousCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/administration', [AdminController::class, 'index'])->name('admin.index');
Route::get('/category/index', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/category/{catogory}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::put('/category/{category}/update', [CategoryController::class, 'update'])->name('category.update');
Route::get('/souscategory/index', [SousCategoryController::class, 'index'])->name('souscategories.index');
Route::get('/souscategory/create', [SousCategoryController::class, 'create'])->name('souscategory.create');
Route::get('/souscategory/{souscategory}/edit', [SousCategoryController::class, 'edit'])->name('souscategory.edit');
Route::post('/souscategory/store', [SousCategoryController::class, 'store'])->name('souscategory.store');
Route::put('/souscategory/{souscategory}/update', [SousCategoryController::class, 'update'])->name('souscategory.update');
Route::delete('/souscategory/{souscategory}/delete', [SousCategoryController::class, 'destroy'])->name('souscategory.delete');

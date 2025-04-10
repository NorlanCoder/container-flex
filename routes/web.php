<?php

use App\Http\Controllers\Admin\AdminConteneurController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SousCategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homepage'])->name('homepage');
Route::get('/list/product/{category}', [HomeController::class, 'productlist'])->name('productlist');
Route::get('/product/{product}', [HomeController::class, 'productdetails'])->name('productdetails');

// 
Route::get('/contact', [HomeController::class, 'contactpage'])->name('contactpage');
Route::get('/about', [HomeController::class, 'aboutpage'])->name('aboutpage');
Route::get('/privacyandpolicies', [HomeController::class, 'privacypage'])->name('privacypage');
Route::get('/termsandconditions', [HomeController::class, 'conditionpage'])->name('conditionpage');


// ####################################################################################################

// Categorie
// Route::get('/administration', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/category', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::get('/admin/category/{catogory}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/admin/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::put('/admin/category/{category}/update', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/admin/category/{category}/delete', [CategoryController::class, 'destroy'])->name('category.delete');

// Sous-categorie
Route::get('/admin/souscategory', [SousCategoryController::class, 'index'])->name('souscategories.index');
Route::get('/admin/souscategory/create', [SousCategoryController::class, 'create'])->name('souscategory.create');
Route::get('/admin/souscategory/{souscategory}/edit', [SousCategoryController::class, 'edit'])->name('souscategory.edit');
Route::post('/admin/souscategory/store', [SousCategoryController::class, 'store'])->name('souscategory.store');
Route::put('/admin/souscategory/{souscategory}/update', [SousCategoryController::class, 'update'])->name('souscategory.update');
Route::delete('/admin/souscategory/{souscategory}/delete', [SousCategoryController::class, 'destroy'])->name('souscategory.delete');

// Conteneur
Route::get('/admin/conteneurs', [AdminConteneurController::class, 'index'])->name('admin.conteneur.index');
Route::get('/admin/conteneurs/create', [AdminConteneurController::class, 'create'])->name('admin.conteneur.create');
Route::post('/admin/conteneurs/store', [AdminConteneurController::class, 'store'])->name('admin.conteneur.store');
Route::put('/admin/conteneurs/{conteneur}/edit', [AdminConteneurController::class, 'edit'])->name('admin.conteneur.edit');
Route::delete('/admin/conteneur/{conteneur}/delete', [AdminConteneurController::class, 'destroy'])->name('admin.conteneur.delete');

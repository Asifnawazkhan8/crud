<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/',[ProductController::class,'crud'])->name('product.index');
Route::get('Product/listing',[ProductController::class,'listing'])->name('product.listing');
Route::post('Product/store',[ProductController::class,'productstore'])->name('product.store');
Route::get('Task/newtask',[ProductController::class,'task'])->name('task.newtask');
Route::post('Task/store',[ProductController::class,'taskstore'])->name('task.store');
Route::get('Contact/newcontact',[ProductController::class,'contact'])->name('contact.newcontact');
Route::post('Contact/store',[ProductController::class,'contactstore'])->name('contact.store');
Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('products/{id}/update', [ProductController::class, 'update'])->name('product.update');
Route::get('products/{id}/delete', [ProductController::class, 'destroy'])->name('product.delete');


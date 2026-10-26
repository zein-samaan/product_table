<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('products',[ProductController::class,'index'])->name('products.index');
Route::get('products/create',[ProductController::class,'create'])->name('products.create');
Route::post('products',[ProductController::class,'store'])->name('products.store');


Route::get('products/{id}/edit', function ($id) {
    $product = Product::query()->find($id);
    return view("products.edit", compact('product'));
})->name('products.edit');


Route::put('product/{id}', function ($id) {
    $product = Product::query()->find($id);
    $product->update([
        
    ]);
    return redirect()->route("products.index");
})->name('products.update');

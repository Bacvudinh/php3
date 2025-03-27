<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Automattic\WooCommerce\Admin\API\AI\Product;
use Illuminate\Support\Facades\Route;

Route::resource('categories',CategoryController::class);
Route::resource('products',ProductController::class);

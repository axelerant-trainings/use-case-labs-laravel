<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;

Route::view('/', 'index')->name('home');

Route::prefix('topic')->group(function() {
    // Routes for subtopic landing pages
    Route::name('topic.')->group(function() {
        /**
         * url: /topic/crud
         * route_name: topic.task2-crud
         */
        Route::view('/crud', 'topics.task2-crud')->name('task2-crud');
        Route::view('/restapi', 'topics.task2-1-restapi')->name('task-2-1-restapi');
    });
    
    /**
     * Routes for actions related to subtopics on page "/topic/crud".
     * All these routes will be prefixed by "/topic/crud/"
     * Hence, to get the correct urls to these pages, use the `route()` helper.
     * @see `php artisan route:list`
     */
    Route::prefix('crud')->group(function() {
        Route::resources([
            'categories' => CategoryController::class,
            'suppliers' => SupplierController::class,
            'products' => ProductController::class,
        ]);
    });
});


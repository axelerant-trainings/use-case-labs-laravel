<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// prefix route names with "api." to avoid conflict with non-api routes
// that use forms.
Route::name('api.')->group(function() {
    Route::apiResources([
        'products' => ProductApiController::class,
    ]);
});

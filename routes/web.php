<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});

// posts routes
Route::get('/posts', [PostController::class, "index"]);
Route::get('/posts/{post:slug}', [PostController::class, "show"]);

Route::get('/categories', function () {
    return view('categories', [
        'categories'    => Category::orderBy('name')->get()
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        "posts" => $category->posts,
        "category"  => $category
    ]);
});

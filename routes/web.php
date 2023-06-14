<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/blog-details', [HomeController::class, 'blogDetails'])->name('blog_details');
Route::get('/categories', [HomeController::class, 'categories'])->name('categories');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::post('/create-category', [CategoryController::class, 'addCategory'])->name('add_category');
    Route::get('/edit-ctg/{id}', [CategoryController::class, 'edit'])->name('edit_ctg');
    Route::post('/update-category', [CategoryController::class, 'updateCategory'])->name('update_category');
    Route::post('/delete-ctg', [CategoryController::class, 'delete'])->name('delete_ctg');

    Route::get('/author', [AuthorController::class, 'index'])->name('author');
    Route::post('/add-author', [AuthorController::class, 'addAuthor'])->name('add_author');
    Route::post('/delete', [AuthorController::class, 'delete'])->name('delete');
    Route::get('/edit/{id}', [AuthorController::class, 'edit'])->name('edit');
    Route::post('/update-author', [AuthorController::class, 'updateAuthor'])->name('update_author');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
});

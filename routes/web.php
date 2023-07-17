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

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::post('/new-blog', [BlogController::class, 'saveBlog'])->name('new.blog');
    Route::get('/manage-blog', [BlogController::class, 'manageBlog'])->name('manage.blog');
    
    Route::middleware(['admin'])->group(function () {
        Route::get('/blog_status/{id}', [BlogController::class, 'blog_status'])->name('blog.status');

        Route::get('/category', [CategoryController::class, 'index'])->name('category');
        Route::post('/create-category', [CategoryController::class, 'addCategory'])->name('add_category');
        Route::get('/edit-ctg/{id}', [CategoryController::class, 'edit'])->name('edit_ctg');
        Route::post('/update-category', [CategoryController::class, 'updateCategory'])->name('update_category');
        Route::post('/delete-ctg', [CategoryController::class, 'delete'])->name('delete_ctg');
        Route::get('/status/{id}', [CategoryController::class, 'status'])->name('status');

        Route::resource('author', AuthorController::class);
        
    });
});

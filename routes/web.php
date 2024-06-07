<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\FirstOrCreateController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\UpdateOrCreateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [CreateController::class, 'create'])->name('post.create');

Route::post('/posts', [StoreController::class, 'store'])->name('post.store');
Route::get('/posts/{post}', [ShowController::class, 'show'])->name('post.show');
Route::get('/posts/{post}/edit', [EditController::class, 'edit'])->name('post.edit');
Route::patch('/posts/{post}', [UpdateController::class, 'update'])->name('post.update');
Route::delete('/posts/{post}', [DeleteController::class, 'destroy'])->name('post.delete');


Route::get('/posts/update', [UpdateController::class, 'update']);
Route::get('/posts/delete', [DeleteController::class, 'delete']);
Route::get('/posts/first_or_create', [FirstOrCreateController::class, 'firstOrCreate']);
Route::get('/posts/update_or_create', [UpdateOrCreateController::class, 'updateOrCreate']);


Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

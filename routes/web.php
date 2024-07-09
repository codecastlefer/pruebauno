<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\middleware\Authtenticate;
use App\Http\middleware\RedirectAuthenticated;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReturnedController;
use App\Http\Controllers\LoanController;


Route::view('/', 'welcome');

// Rutas públicas
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/authenticate', [LoginController::class, 'login'])->name('login.process');
});

// Rutas protegidas
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/author', [AuthorController::class, 'index'])->name('author.index');
    Route::get('/author-add', [AuthorController::class, 'authoradd'])->name('author.add');
    Route::get('/author-edit', [AuthorController::class, 'authoredit'])->name('author.edit');

    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category-add', [CategoryController::class, 'categoryadd'])->name('category.add');
    Route::get('/category-edit', [CategoryController::class, 'categoryedit'])->name('category.edit');

    Route::get('/book', [BookController::class, 'index'])->name('book.index');
    Route::get('/book-add', [BookController::class, 'bookadd'])->name('book.add');
    Route::get('/book-edit', [BookController::class, 'bookedit'])->name('book.edit');

    Route::get('/returned', [ReturnedController::class, 'index'])->name('returned.index');
    Route::get('/returned-add', [ReturnedController::class, 'returnedadd'])->name('returned.add');
    Route::get('/returned-edit', [ReturnedController::class, 'returnededit'])->name('returned.edit');

    Route::get('/loan', [LoanController::class, 'index'])->name('loan.index');
    Route::get('/loan-add', [LoanController::class, 'loanadd'])->name('loan.add');
    Route::get('/loan-edit', [LoanController::class, 'loanedit'])->name('loan.edit');




});

// Manejar GET request para logout
Route::get('/logout', function () {
    return redirect()->route('login');
});

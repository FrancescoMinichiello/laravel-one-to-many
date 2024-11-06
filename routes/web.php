<?php

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware("auth")->prefix("/admin")->name("admin.")->group(function () {

    Route::get('/projects', [ProjectController::class, "index"])->name('projects.index');
    Route::get('/projects/create', [ProjectController::class, "show"])->name('projects.show');
    Route::get('/projects/{id}', [ProjectController::class, "create"])->name('projects.create');
    Route::post('/projects', [ProjectController::class, "store"])->name('projects.store');
});

Route::middleware("auth")->prefix("/admin")->name("admin.")->get('/users', [UserController::class, 'index'])->name('users.index');
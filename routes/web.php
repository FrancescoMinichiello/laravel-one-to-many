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




Route::middleware("auth")->get('/projects', [ProjectController::class, "index"])->name('admin.projects.index');
Route::middleware("auth")->get('/projects/create', [ProjectController::class, "show"])->name('admin.projects.show');
Route::middleware("auth")->get('/projects/{id}', [ProjectController::class, "create"])->name('admin.projects.create');
Route::middleware("auth")->post('/projects', [ProjectController::class, "store"])->name('admin.projects.store');
Route::middleware("auth")->get('/users', [UserController::class, 'index'])->name('admin.users.index');
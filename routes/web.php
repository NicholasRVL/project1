<?php

use App\Http\Middleware\CekLogin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main.main');
});

Route::get('/admin', function () {
    return view('layout.admin');
});


Route::get('/home', function () {
    return view('layout.home');
});


Route::get('/master', function() {
    return view('layout.master');
});

Route::resource('user', UserController::class);
Route::resource('admin', AdminController::class);


Route::get('/user', [UserController::class, 'index'])->name('tasks.index');
Route::resource('tasks', UserController::class);
Route::resource('tasks', UserController::class)->except(['index']);
Route::patch('/tasks/{task}/toggle', [UserController::class, 'toggle'])->name('tasks.toggle');
Route::post('tasks/{task}/toggle', [UserController::class, 'toggle'])->name('tasks.toggle');


Route::get('/dashboard/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/user', [UserController::class, 'index'])->name('user.index');


Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get("/login", [AuthController::class, 'login'])->name('login');
Route::post("/login", [AuthController::class, 'do_login']);
Route::get("/register", [AuthController::class, 'register']);
Route::post("/register", [AuthController::class, 'do_register']);
Route::get("/logout", [AuthController::class, 'logout']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => [CekLogin::class.':admin']], function(){
        Route::get("/admin", [AdminController::class, 'index']);
        
    });

    Route::group(['middleware' => [CekLogin::class.':user']], function(){
        Route::get("/user", [UserController::class, 'index']);
    });

    Route::group(['middleware' => [CekLogin::class.':user']], function(){
        Route::get("/mahasiswa", [UserController::class, 'index']);
        
    });

    Route::group(['middleware' => [CekLogin::class.':dosen']], function(){
        
    });

});
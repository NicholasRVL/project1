<?php

use App\Http\Middleware\CekLogin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TasksDevController;
use App\Http\Controllers\DeveloperController;




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




 Route::prefix('tasks')->group(function () {
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/', [TaskController::class, 'store'])->name('tasks.store');
    Route::get('/{task}', [TaskController::class, 'show'])->name('tasks.show');
    Route::get('/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::put('/{task}', [TaskController::class, 'update'])->name('tasks.update');
    Route::delete('/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
    Route::post('/{task}/toggle', [TaskController::class, 'toggle'])->name('tasks.toggle');
});


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


Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/tasksUser', [TaskController::class, 'index'])->name('user.index')->middleware('auth');


Route::middleware(['auth'])->group(function () {

    Route::middleware([CekLogin::class . ':developer'])->group(function () {
        Route::get('/developer', [DeveloperController::class, 'index']);
        Route::get('/admin', [AdminController::class, 'index']);
        Route::get('/', [UserController::class, 'index']);
    });

    Route::middleware([CekLogin::class . ':admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index']);
        Route::get('/', [UserController::class, 'index']);
    });

    Route::middleware([CekLogin::class . ':user'])->group(function () {
        Route::get('/', [UserController::class, 'index']);
    });

});

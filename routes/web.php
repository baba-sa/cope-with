<?php

//use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\CopingsController;
use App\Http\Controllers\PracticesController;
use App\Http\Controllers\MyActionsController;

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

Route::get('/', [PracticesController::class, 'index']);

Route::get('/dashboard', [PracticesController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth']], function () {
    Route::resource('users', UsersController::class, ['only' => ['index', 'show']]);
    Route::resource('copings', CopingsController::class, ['only' => ['index', 'show', 'create', 'store']]);
    Route::resource('practices', PracticesController::class, ['only' => ['index', 'show', 'store', 'destroy']]);

    Route::group(['prefix' => 'copings/{id}'], function () {
        Route::post('my_action', [MyActionsController::class, 'store'])->name('my_action.add');
        Route::delete('my_action', [MyActionsController::class, 'destroy'])->name('my_action.remove'); 
    });
    
});


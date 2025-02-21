<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketsController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Ticket;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::resource('category', CategoryController::class)
//     ->middleware(['auth', 'verified']);
// Route::resource('tickets', TicketsController::class)
//     ->middleware(['auth', 'verified']);

Route::middleware(['auth', 'verified'])->group(function()
{
    Route::resource('category', CategoryController::class);
    Route::resource('tickets', TicketsController::class);
});

// Route::get('/tickets', [Ticket::class, 'Tickets'])->name('tickets');

Route::resource('category', CategoryController::class);

Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




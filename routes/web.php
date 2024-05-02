<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\CritereController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Logging\TeamCity;

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
    return view('layouts.base');
});

Route::get('/dashboard', function () {
    return view('layouts.base');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



//Routes du modele City

Route::get('/cities', [CityController::class, 'list'])->name('cities.list');
Route::get('cities/create', [CityController::class, 'create'])->name('cities.create');
Route::post('/cities/store', [CityController::class, 'store'])->name('cities.store');
Route::get('/cities/{id}', [CityController::class, 'edit'])->name('cities.edit');
Route::put('/cities/{id}', [CityController::class, 'update'])->name('cities.update');
Route::delete('/cities/{id}', [CityController::class, 'delete'])->name('cities.delete');

//Routes du modele University

Route::get('/univs', [UniversityController::class, 'list'])->name('univs.list');
Route::get('univs/create', [UniversityController::class, 'create'])->name('univs.create');
Route::post('/univs/store', [UniversityController::class, 'store'])->name('univs.store');
Route::get('/univs/{id}', [UniversityController::class, 'edit'])->name('univs.edit');
Route::put('/univs/{id}', [UniversityController::class, 'update'])->name('univs.update');
Route::delete('/univs/{id}', [UniversityController::class, 'delete'])->name('univs.delete');




// Route::get('/criteria', [CritereController::class, 'list'])->name('criteria.list');
Route::get('criteria/create', [CritereController::class, 'create'])->name('criteria.create');
Route::post('/criteria/store', [CritereController::class, 'store'])->name('criteria.store');
Route::get('/criteria/{id}', [CritereController::class, 'edit'])->name('criteria.edit');
Route::put('/criteria/{id}', [CritereController::class, 'update'])->name('criteria.update');
Route::delete('/criteria/{id}', [CritereController::class, 'delete'])->name('criteria.delete');

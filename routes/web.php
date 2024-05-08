<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\ClassementController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\CritereController;
use App\Http\Controllers\NotationController;
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

Route::get('/', [UniversityController::class, 'welcome'])->name('welcome');

Route::get('/home', function () {
    return view('home')->name('home');
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
Route::middleware(['auth', 'admin'])->group(
    function () {
        Route::get('/cities', [CityController::class, 'list'])->name('cities.list');
        Route::get('cities/create', [CityController::class, 'create'])->name('cities.create');
        Route::post('/cities/store', [CityController::class, 'store'])->name('cities.store');
        Route::get('/cities/{id}', [CityController::class, 'edit'])->name('cities.edit');
        Route::put('/cities/{id}', [CityController::class, 'update'])->name('cities.update');
        Route::delete('/cities/{id}', [CityController::class, 'delete'])->name('cities.delete');
    }
);


//Routes du modele University

Route::get('/univs', [UniversityController::class, 'list'])->name('univs.list');
Route::get('univs/create', [UniversityController::class, 'create'])->name('univs.create')->middleware('is_admin');
Route::post('/univs/store', [UniversityController::class, 'store'])->name('univs.store');
Route::get('/univs/{id}', [UniversityController::class, 'edit'])->name('univs.edit');
Route::put('/univs/{id}', [UniversityController::class, 'update'])->name('univs.update');
Route::delete('/univs/{id}', [UniversityController::class, 'delete'])->name('univs.delete');
Route::get('/univs/details/{univ_id}',[UniversityController::class,'details'])->name('univs.details');





//Routes du modele critere

// Route::get('/criteria', [CritereController::class, 'list'])->name('criteria.list');
Route::get('criteria/create', [CritereController::class, 'create'])->name('criteria.create');
Route::post('/criteria/store', [CritereController::class, 'store'])->name('criteria.store');
Route::get('/criteria/{id}', [CritereController::class, 'edit'])->name('criteria.edit');
Route::put('/criteria/{id}', [CritereController::class, 'update'])->name('criteria.update');
Route::delete('/criteria/{id}', [CritereController::class, 'delete'])->name('criteria.delete');


//Routes du modele notations

Route::get('/notations', [NotationController::class, 'list'])->name('notations.list');
Route::get('notations/create', [NotationController::class, 'create'])->name('notations.create');
Route::post('/notations/store', [NotationController::class, 'store'])->name('notations.store');
Route::get('/notations/{id}', [NotationController::class, 'edit'])->name('notations.edit');
Route::put('/notations/{id}', [NotationController::class, 'update'])->name('notations.update');
Route::delete('/notations/{id}', [NotationController::class, 'delete'])->name('v.delete');


Route::get(
    '/classements',
    [ClassementController::class, 'index']
)->name('classements.index');

Route::get(
    '/classements/{critere_id}',
    [ClassementController::class, 'partiel']
)->name('classements.critere');


Route::get(
    '/classements',
    [ClassementController::class, 'index']
)->name('classements.index');


Route::post('/classements', [ClassementController::class, 'getClassement']);


Route::get('/comments', [CommentController::class, 'list'])->name('comments.list');
Route::get('comments/create', [CommentController::class, 'create'])->name('comments.create');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments/{id}', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{id}', [CommentController::class, 'delete'])->name('comments.delete');




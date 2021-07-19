<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ClassroomsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('isadmin')->group(function(){
    Route::get('/timetableadmin/{id}', [TimetableController::class, 'indexadmin'])->name('timetable.indexadmin');
    
    Route::get('/classrooms/create', [ClassroomsController::class, 'create'])->name('classrooms.create'); //----
    Route::get('/classrooms/edit/{id}', [ClassroomsController::class, 'edit'])->name('classrooms.edit'); //----
     //----
    Route::get('/courses', [CoursesController::class, 'index'])->name('courses.index');
    Route::get('/courses/create', [CoursesController::class, 'create'])->name('courses.create');
    Route::get('/courses/edit/{id}', [CoursesController::class, 'edit'])->name('courses.edit');    
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
    Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');    
    Route::get('/terms', [TermsController::class, 'index'])->name('terms.index');
    Route::get('/terms/create', [TermsController::class, 'create'])->name('terms.create');
    Route::get('/terms/edit/{id}', [TermsController::class, 'edit'])->name('terms.edit');
    //Route::get('/terms/update/{id}', [TermsController::class, 'update'])->name('terms.update');
    //Route::get('/terms/delete/{id}', [TermsController::class, 'destroy'])->name('terms.delete');
    //Route::resource('terms', 'TermsController');
    //rute za sve admine
});


Route::middleware('auth')->group(function(){
    Route::get('/classrooms', [ClassroomsController::class, 'index'])->name('classrooms.index');
    Route::get('/classrooms/show/{id}', [ClassroomsController::class, 'show'])->name('classrooms.show');

    Route::get('/classrooms/occupancy', [ClassroomsController::class, 'occupancy'])->name('classrooms.occupancy');   
    Route::get('/users/show/{id}', [UsersController::class, 'show'])->name('users.show');
    Route::post('/timetable', [TimetableController::class, 'index'])->name('timetable');
});

//Route::get('timetable', [TimetableController::class, 'index'])->name('timetable.index');
Route::post('/timetablestudent', [TimetableController::class, 'indexstudent'])->name('timetablestudent');

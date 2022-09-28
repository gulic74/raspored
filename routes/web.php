<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ClassroomsController;
use App\Http\Controllers\TimetableFlagController;
use App\Http\Controllers\SubjectPPController;
use App\Http\Controllers\WeekController;
use App\Http\Controllers\TimetablePpoController;
use App\Http\Controllers\InfoPpoController;

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
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('isadmin')->group(function(){

    Route::get('/timetableflag', [TimetableFlagController::class, 'index'])->name('timetableflag.index');
    Route::post('/timetableflagstore', [TimetableFlagController::class, 'storeflags'])->name('timetableflag.storeflags');

    Route::get('/infoPPO', [InfoPpoController::class, 'index'])->name('infoPPO.index');
    Route::post('/storeinfoPPO', [InfoPpoController::class, 'storeInfo'])->name('infoPPO.store');

    Route::get('/timetableadmin/{id}', [TimetableController::class, 'indexadmin'])->name('timetable.indexadmin');
    
    Route::get('/classrooms/create', [ClassroomsController::class, 'create'])->name('classrooms.create'); //----
    Route::get('/classrooms/edit/{id}', [ClassroomsController::class, 'edit'])->name('classrooms.edit'); //----    
    Route::post('/classrooms/show/{id}/csv', [ClassroomsController::class, 'csv'])->name('classrooms.csv');
    Route::post('/classrooms/show/{id}/pdf', [ClassroomsController::class, 'pdf'])->name('classrooms.pdf');
    
    Route::get('/timetablegeneratePDF', [TimetableController::class, 'timetablegeneratePDF'])->name('timetablegeneratePDF');
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

    Route::get('/terms/freezeterms', function () {
        return view('freeze');
    })->name('terms.freezeterms');

    Route::get('/terms/addregular', [TermsController::class, 'addregular'])->name('terms.addregular');
    
    Route::get('/terms/freezeregular', [TermsController::class, 'freezeregular'])->name('terms.freezeregular');
    Route::get('/terms/unfreezeregular', [TermsController::class, 'unfreezeregular'])->name('terms.unfreezeregular');

    Route::get('/terms/freezetemporary', [TermsController::class, 'freezetemporary'])->name('terms.freezetemporary');
    Route::get('/terms/unfreezetemporary', [TermsController::class, 'unfreezetemporary'])->name('terms.unfreezetemporary');
    
    //Route::get('/terms/update/{id}', [TermsController::class, 'update'])->name('terms.update');
    //Route::get('/terms/delete/{id}', [TermsController::class, 'destroy'])->name('terms.delete');
    //Route::resource('terms', 'TermsController');
    //rute za sve admine


    Route::get('/subject', [SubjectPPController::class, 'index'])->name('subjects.index');
    Route::post('/subject', [SubjectPPController::class, 'store'])->name('subjects.store');
    Route::get('/subject/create', [SubjectPPController::class, 'create'])->name('subjects.create');
    Route::get('/subject/{subject}/edit', [SubjectPPController::class, 'edit'])->name('subjects.edit');
    Route::post('/subject/{subject}', [SubjectPPController::class, 'update'])->name('subjects.update');
    Route::get('/subject/{subject}', [SubjectPPController::class, 'destroy'])->name('subjects.destroy');
    Route::get('/search', [SubjectPPController::class, 'search'])->name('search');

    Route::get('/subject/{subject}/editusers', [SubjectPPController::class, 'editusers'])->name('subjects.editusers');

    Route::get('/week', [WeekController::class, 'index'])->name('weeks.index');
    Route::post('/week', [WeekController::class, 'store'])->name('weeks.store');
    Route::get('/week/create', [WeekController::class, 'create'])->name('weeks.create');
    Route::get('/week/{week}/edit', [WeekController::class, 'edit'])->name('weeks.edit');
    Route::post('/week/{week}', [WeekController::class, 'update'])->name('weeks.update');
    Route::get('/week/{week}', [WeekController::class, 'destroy'])->name('weeks.destroy'); 

    Route::get('/timetablePPO', [TimetablePpoController::class, 'index'])->name('timetableppo.index'); 
    
    Route::get('/timetablegeneratePPoPDF', [TimetableController::class, 'timetablegeneratePPoPDF'])->name('timetablegeneratePPoPDF');
    

});


Route::middleware('auth')->group(function(){
    Route::get('/classrooms', [ClassroomsController::class, 'index'])->name('classrooms.index');
    Route::get('/classrooms/show/{id}', [ClassroomsController::class, 'show'])->name('classrooms.show');

    Route::get('/classrooms/occupancy', [ClassroomsController::class, 'occupancy'])->name('classrooms.occupancy');   
    Route::get('/users/show/{id}', [UsersController::class, 'show'])->name('users.show');
    Route::post('/timetable', [TimetableController::class, 'index'])->name('timetable');
    //zbog greške
    Route::get('/timetable', function () {
        return redirect(route('home'));
    });
});

//Route::get('timetable', [TimetableController::class, 'index'])->name('timetable.index');
Route::post('/timetablestudent', [TimetableController::class, 'indexstudent'])->name('timetablestudent');
//zbog greške
Route::get('/timetablestudent', function () {
    return redirect(route('home'));
});

Route::get('/timetablestudentPDF', [TimetableController::class, 'indexstudentPDF'])->name('timetablestudentPDF');
Route::get('/timetablestudentPPoPDF', [TimetableController::class, 'indexstudentPPoPDF'])->name('timetablestudentPPoPDF');


Route::get('/logout', 'Laravel\Fortify\Http\Controllers\AuthenticatedSessionController@destroy');

Route::post('/timetablePp', [TimetablePpoController::class, 'indexRaspored'])->name('indexPpoRaspored');
Route::get('/timetablePp', function () {
    return redirect(route('home'));
});

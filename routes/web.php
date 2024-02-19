<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Hello;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\StudentController;
use App\Models\Student;

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

// Route::get('hello',[Hello::class, 'sample']);


//////////////////////// HAS ONE/ BELONGS TO- ONE TO ONE RELATIONS ///////////////////
Route::controller(StudentController::class)->group(function (){
    Route::get('/students', 'index')->name('students');
    Route::get('/students','create')->name('students.create');
    Route::post('/students/store','store')->name('students.store');
    Route::get('/students/edit','edit')->name('students.edit');
    Route::put('/students/update','update')->name('students.update');
    Route::delete('/students/delete','delete')->name('students.delete');
});


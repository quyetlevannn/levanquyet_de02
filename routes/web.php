<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/students/create', [App\Http\Controllers\StudentController::class, 'create']);
Route::post('/students/create', [App\Http\Controllers\StudentController::class, 'store']);
// Read userget_all_students
Route::get('/students', [App\Http\Controllers\StudentController::class, 'get_all_students']);
Route::get('/students/update/{id}', [App\Http\Controllers\StudentController::class, 'edit']);
Route::post('/students/update/{id}', [App\Http\Controllers\StudentController::class, 'update']);
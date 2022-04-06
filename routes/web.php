<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('landingpage');
});

Route::get('/registration', function () {
    return view('registration.index');
});
Route::post('/registration', [Controllers\RegistrationController::class, 'createRegistration'])->name('createRegistration');
Route::get('/list-registrations', [Controllers\RegistrationController::class, 'index'])->name('registrationStudent');

Route::patch('/registration', [Controllers\RegistrationController::class, 'updateRegistration'])->name('updateRegistration');
Route::get('/registration/delete/{id}', [Controllers\RegistrationController::class, 'deleteRegistration'])->name('deleteRegistration');
Route::get('/registration/print/{id}', [Controllers\RegistrationController::class, 'printRegistration'])->name('printRegistration');


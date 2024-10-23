<?php

use App\Http\Controllers\CompanyController;
use App\Models\Company;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CompanyController::class, 'index'])->name('companies.index');

// Route::get('/create', [CompanyController::class, 'create'])->name('companies.create');
// Route::post('/store', [CompanyController::class, 'store'])->name('companies.store');
// Route::get('/edit/{id}', [CompanyController::class, 'edit'])->name('companies.edit');
// Route::put('/update/{id}', [CompanyController::class, 'update'])->name('companies.update');
// Route::delete('/delete/{id}', [CompanyController::class, 'destroy'])->name('companies.destroy');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportController;
use App\Models\SoftwareHouse;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/import-csv', function () {
    return view('import');
});

Route::post('/import-csv', [ImportController::class, 'import'])->name('import.csv');

// Route::get('/software-houses', function () {
//     return view('software_houses');
// });

Route::get('/', function () {
    return view('software_houses');
});

Route::get('/api/software-houses', function () {
    return SoftwareHouse::all();
});


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Clearances;
use App\Http\Livewire\Barangaymembers;
use App\Http\Livewire\Barangays;

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
    return redirect('login');
});
Route::get('/register', function () {
    return redirect('login');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('dashboard', Dashboard::class)->middleware(['auth:sanctum', 'verified'])->name('dashboard');
Route::get('clearance', Clearances::class)->middleware(['auth:sanctum', 'verified'])->name('clearance');
Route::get('brgymembers', Barangaymembers::class)->middleware(['auth:sanctum', 'verified'])->name('brgymembers');
Route::get('barangay', Barangays::class)->middleware(['auth:sanctum', 'verified'])->name('barangay');

Route::get('reports/{id}', 'App\Http\Controllers\ReportsController@index')->name('reports');

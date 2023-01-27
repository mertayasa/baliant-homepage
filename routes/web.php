<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortofolioController;
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
    return view('frontend.pages.welcome');
});

// Route::get('sistem-manajemen-laundry', function () {
//     $data = [
//         'title' => 'Sistem Manajemen Laundry',
//         'demo_link' => 'https://baliantprojects.com/laundry',
//         'thumbnail' => asset('preview/laundry-preview.png')
//     ];

//     return view('frontend.pages.portofolio', $data);
// });

// Route::group(['middleware' => ['auth']], function(){
//     Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });

// require __DIR__.'/auth.php';


// Laundry
// Dokter Gigi
// Akademik Laravel
// Stt
// Kos
// Mobil
// Crm Wisata

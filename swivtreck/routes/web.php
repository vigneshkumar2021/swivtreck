<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
use App\Http\Controllers\FreelancingController;
use App\Http\Controllers\VideoController;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [FreelancingController::class, 'showmain']);
Route::get('/livecatagories', [FreelancingController::class, 'livecatagories']);
Route::get('/videocatagories', [FreelancingController::class, 'videocatagories']);
Route::get('/bronze', [FreelancingController::class, 'bronze']);
Route::get('/bronze_details', [FreelancingController::class, 'bronze_details']);
Route::get('/silver', [FreelancingController::class, 'silver']);
Route::get('/silver_details', [FreelancingController::class, 'silver_details']);
Route::get('/gold', [FreelancingController::class, 'gold']);
Route::get('/gold_details', [FreelancingController::class, 'gold_details']);
Route::get('/diamond', [FreelancingController::class, 'diamond']);
Route::get('/diamond_details', [FreelancingController::class, 'diamond_details']);
Route::get('/form', [FreelancingController::class, 'form']);
Route::post('/formdata', [FreelancingController::class, 'formdata'])->middleware('auth');
Route::get('/details', [FreelancingController::class, 'showRegistrations']);
require __DIR__ . '/video_routes.php';


require __DIR__ . '/auth.php';

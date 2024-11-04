<?php

use App\Http\Controllers\ContentUploadController;
use App\Http\Controllers\ProfileController;
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

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



//Route::get('contentHome', ContentUploadController::class, 'contentHome')->name('content-uploads.contentHome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::resource('content-uploads', ContentUploadController::class);
    Route::resource('feedbacks', \App\Http\Controllers\FeedbackController::class);
    Route::resource('discussions', \App\Http\Controllers\DiscussionController::class);
    Route::resource('content-views', \App\Http\Controllers\ContentViewsController::class);
    Route::resource('content-downloads', \App\Http\Controllers\ContentDonwloadController::class);

});

require __DIR__.'/auth.php';

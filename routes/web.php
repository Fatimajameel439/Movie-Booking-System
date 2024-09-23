<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AllmovieController;
use App\Http\Controllers\TheaterController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MailController;

use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'show_movies']);
Route::get('logout', [UserController::class, 'logout']);


Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/users', [AdminController::class, 'users']);
    Route::get('/show-contacts', [AdminController::class, 'showcontacts']);
    // Route::get('/delete-user/{id}', [AdminController::class, 'destroy']);

    Route::get('/insert-theater', [TheaterController::class, 'create']);
    Route::post('/store-theater', [TheaterController::class, 'store']);
    Route::get('/show-theater', [TheaterController::class, 'index']);
    Route::get('/delete-theater/{id}', [TheaterController::class, 'destroy']);
    Route::get('/edit-theater/{id}', [TheaterController::class, 'edit']);
    Route::post('/update-theater/{id}', [TheaterController::class, 'update']);

    Route::get('/insert-movie', [MovieController::class, 'create']);
    Route::post('/store-movie', [MovieController::class, 'store']);
    Route::get('/show-movie', [MovieController::class, 'index']);
    Route::get('/delete-movie/{id}', [MovieController::class, 'destroy']);
    Route::get('/edit-movie/{id}', [MovieController::class, 'edit']);
    Route::post('/update-movie/{id}', [MovieController::class, 'update']);


    Route::get('/show-bookings', [AdminController::class, 'showbookings']);

    Route::get('insert-showtime', [AdminController::class,'create']);
    Route::post('store-showtime', [AdminController::class,'store']);
    Route::get('show-showtime', [AdminController::class,'show']);
    Route::get('/delete-showtime/{id}', [AdminController::class, 'destroy']);
    Route::get('/edit-showtime/{id}', [AdminController::class, 'edit']);
    Route::post('/update-showtime/{id}', [AdminController::class, 'update']);

});

Route::get('/index', function () {
    return view('index');
});

Route::get('/allmovie', [AllmovieController::class,'index']);

Route::get('/booking', [BookingController::class, 'index']);
Route::get('/booking-store', [BookingController::class, 'store']);
Route::get('/book-info/{id}', [BookingController::class, 'info']);
Route::get('/show-trailer/{id}', [MovieController::class, 'show_trailer']);
Route::get('/show-movie/{id}', [MovieController::class, 'show_movie']);
Route::get('/show2-movie/{id}', [MovieController::class, 'show2_movie']);
Route::get('/getTheaters/{movieId}', [MovieController::class, 'getTheaters']);
Route::get('/getShowDates/{movieId}/{theaterId}', [MovieController::class, 'getShowDates']);
Route::get('/getShowTimes/{movieId}/{theaterId}/{showDate}', [MovieController::class, 'getShowTimes']);
Route::post('/get-price', [BookingController::class, 'getPrice']);

// comment routes

Route::post('/comments.store', [CommentController::class, 'store'])->name('comments.store');


// contact routes
Route::get('/contact-page', [ContactController::class, 'index']);
Route::post('/contact-store', [ContactController::class, 'store']);

Route::get('/profile', [UserController::class, 'profile']);
Route::get('send-mail', [MailController::class, 'index']);



require __DIR__ . '/auth.php';

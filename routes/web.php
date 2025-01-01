<?php

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
//home joyce
use App\Http\Controllers\MainPageController;
Route::get('/mainpage', [MainPageController::class, 'showMainPage'])->name('mainpage');
// Profile Route
Route::get('/profile', [MainPageController::class, 'profile'])->name('profile');
// Settings Route
Route::get('/settings', [MainPageController::class, 'settings'])->name('settings');
// Logout Route
Route::post('/logout', [MainPageController::class, 'logout'])->name('logout');

// Show login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Handle login form submission
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Handle user logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/join', function () {
    return view('join');
});

Route::post('/join', function (Illuminate\Http\Request $request) {
    // Process the form submission
    $name = $request->input('name');
    $phone = $request->input('phone');

    // Save data or perform other actions
    return redirect('/home')->with('success', 'Thank you for joining, ' . $name . '!');
});


// routes/web.php
Route::get('/learn-more', function () {
    return view('learn-more');
});

//mine
Route::get('/', function () {
    return view('welcome');
});

//sign up##
use App\Http\Controllers\SignupController;

Route::get('/signup', [SignupController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [SignupController::class, 'register']);

//for socmed/google sign up##
use App\Http\Controllers\Auth\SocialLoginController;

Route::get('/auth/{provider}', [SocialLoginController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialLoginController::class, 'handleProviderCallback']);

//login page##
use App\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Show login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Handle login form submission
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Handle user logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Show main page after successful login
Route::get('/', [MainPageController::class, 'showMainPage'])->name('home');


//activities##
Route::get('/activities', function () {
    return view('activities.activities');
})->name('activities');
use App\Http\Controllers\ActivityController;

Route::get('/activities/activities', [ActivityController::class, 'index'])->name('activities'); // Main activities page
Route::get('/activities/infants', [ActivityController::class, 'infants'])->name('activities.infants'); // Infants page
Route::get('/activities/toddlers', [ActivityController::class, 'toddlers'])->name('activities.toddlers'); // Toddlers page
Route::get('/activities/preschoolers', [ActivityController::class, 'preschoolers'])->name('activities.preschoolers'); // Preschoolers page
Route::get('/activities/schoolAged', [ActivityController::class, 'schoolAged'])->name('activities.schoolAged'); // School-aged page

//infants activities
Route::get('/activities/infants/tummy', function () {
    return view('activities.infants.tummy');
})->name('activities.infants.tummy');
Route::get('/activities/infants/babyMassage', function () {
    return view('activities.infants.babyMassage');
})->name('activities.infants.babyMassage');
Route::get('/activities/infants/sensoryGames', function () {
    return view('activities.infants.sensoryGames');
})->name('activities.infants.sensoryGames');
Route::get('/activities/infants/babyMirroring', function () {
    return view('activities.infants.babyMirroring');
})->name('activities.infants.babyMirroring');
Route::get('/activities/infants/sitting', function () {
    return view('activities.infants.sitting');
})->name('activities.infants.sitting');

//toddlers
Route::get('/activities/toddlers/floatingFishing', function () {
    return view('activities.toddlers.floatingFishing');
})->name('activities.toddlers.floatingFishing');
Route::get('/activities/toddlers/funMatching', function () {
    return view('activities.toddlers.funMatching');
})->name('activities.toddlers.funMatching');
Route::get('/activities/toddlers/eggCarton', function () {
    return view('activities.toddlers.eggCarton');
})->name('activities.toddlers.eggCarton');


//preschoolers activities
Route::get('/activities/preschoolers/ballMatch', function () {
    return view('activities.preschoolers.ballMatch');
})->name('activities.preschoolers.ballMatch');
Route::get('/activities/preschoolers/tissue', function () {
    return view('activities.preschoolers.tissue');
})->name('activities.preschoolers.tissue');
Route::get('/activities/preschoolers/aeiou', function () {
    return view('activities.preschoolers.aeiou');
})->name('activities.preschoolers.aeiou');
Route::get('/activities/preschoolers/cups', function () {
    return view('activities.preschoolers.cups');
})->name('activities.preschoolers.cups');

//schoolAged
Route::get('/activities/schoolAged/lungAnatomy', function () {
    return view('activities.schoolAged.lungAnatomy');
})->name('activities.schoolAged.lungAnatomy');
Route::get('/activities/schoolAged/mathGame', function () {
    return view('activities.schoolAged.mathGame');
})->name('activities.schoolAged.mathGame');
Route::get('/activities/schoolAged/surgery', function () {
    return view('activities.schoolAged.surgery');
})->name('activities.schoolAged.surgery');
Route::get('/activities/schoolAged/haircut', function () {
    return view('activities.schoolAged.haircut');
})->name('activities.schoolAged.haircut');



//forum
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

// Forum page
Route::get('/forum', function () {
    return view('forum');
})->name('forum');

// API routes
Route::prefix('api')->group(function () {
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store'); // Create a new post
    Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store'); // Add a comment
});

//articles
use App\Http\Controllers\ArticleController;

Route::get('/articles/{page?}', [ArticleController::class, 'index'])->name('articles');


<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\CreateController;
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

Route::get('/', function () {
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

require __DIR__.'/auth.php';


/*
*/
Route::get('/website', [WebsiteController::class, 'index']);

Route::get('/users', [UserController::class, 'index']);

Route::get('/quizzes', [QuizController::class, 'index']);
Route::get('/quizzes/{id}', [QuizController::class, 'show'])
->name('quizzes.show');
Route::get('/quizzes/{quizId}/questions/{questionId}/edit', [QuizController::class, 'edit'])
->name('quizzes.edit');
Route::patch('/quizzes/{quizId}/questions/{questionId}/update', [QuizController::class, 'update'])
->name('quizzes.update');

Route::delete('/quizzes/{quizId}/questions/{questionId}', [QuizController::class, 'destroy'])
->name('quizzes.destroy');

Route::get('/admin', [AdminController::class, 'index'])
->middleware(['auth', 'admin'])
->name('admin');
Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])
->name('admin.edit');
Route::patch('/quizzes/{id}/update', [AdminController::class, 'update'])
->name('admin.update');

Route::get('/admin/create', [CreateController::class, 'create']);

Route::post('admin', [CreateController::class, 'store'])
->name('admin.store');


// Language Switcher Route 言語切替用ルート
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
});

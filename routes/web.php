<?php

use App\Http\Controllers\CaptchaController;
use App\Http\Controllers\CaptchaServiceController;
use App\Http\Controllers\ComentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Comments;
use App\Models\News;
use Illuminate\Support\Facades\Route;
use Mews\Captcha\Facades\Captcha;

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
    return view('welcome',
        [
            "news" => News::orderBy('created_at', 'desc')->get(),
            "comments" => Comments::orderBy('created_at', 'desc')->get(),
        ]);
});
Route::get('register', [RegisterController::class, 'show'])->middleware('guest');
Route::post('createUser', [RegisterController::class, 'createUser'])->middleware('guest');
Route::get('logout', [SessionController::class, 'logout']);
Route::get('login', [LoginController::class, 'login'])->middleware('guest');
Route::post('login', [LoginController::class, 'auth'])->middleware('guest');
Route::post('createNews', [NewsController::class, 'create'])->middleware('auth');
Route::post('addComment', [ComentController::class, 'createComment']);
Route::post('deleteNew', [NewsController::class, 'delete'])->middleware('auth');
Route::post('deleteComment', [ComentController::class, 'delete']);

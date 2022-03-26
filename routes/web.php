<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ProfileController;


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


Route::get('/', [QuestionsController::class, 'index']);
Route::get('/api/v1/questions', [QuestionsController::class, 'all']);
Route::get('/api/v1/questions/{id}', [QuestionsController::class, 'detail']);
Route::post('/api/v1/questions/answers', [AnswerController::class, 'store']);
Route::post('/api/v1/profile', [ProfileController::class, 'store']);

// Route::get('/', function () {
//     return view('index');
// });

// Route::group([
//     'prefix' => '/v1'
// ], function() {
//     require __DIR__.'/api.php';
// });
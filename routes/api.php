<?php


use App\Http\Controllers\Api\BlogApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\GoalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|

*/

//dashboard apis
//remember in order to post to work you have disabled 
// \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class, in kernel.php
Route::get('tasks', [ProductController::class, 'tasks']);
Route::post('remove_task', [ProductController::class, 'remove_task']);
Route::post('add_task', [ProductController::class, 'add_task']);


Route::get('home', [BlogApiController::class, 'home']);
Route::get('blog/{id}', [BlogApiController::class, 'blog']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PostController;
use Illuminate\Routing\Route as RoutingRoute;

//記事一覧や詳細を表示するルート（GETリクエスト）
Route::get('/', [PostController::class, 'index']);
Route::get('posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

Route::put('/posts/{post}', [PostController::class, 'update']);

//記事を作成するルート（POSTリクエスト）
Route::post('/posts', [PostController::class, 'store']);

//記事を削除するルート（DELETリクエスト）
Route::delete('/posts/{post}', [PostController::class, 'delete']);
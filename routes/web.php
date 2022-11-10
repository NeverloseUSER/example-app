<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Models\Articles;
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
    return view('welcome');
});


//Route::get('/home', function () {
//    return view('home', [
//        'name1' => 'Фильм первый',
//        'descrone' => 'Описание Первое',
//        'name2' => 'Фильм второй',
//        'descrtwo' => 'Описание Второе',
//        'name3' => 'Фильм третий',
//        'descrthree' => 'Описание Третье',
//        'name4' => 'Фильм четвертый',
//        'descrfour' => 'Описание Четвертое',
//    ]);
//});
Route::get('/home',  [ArticleController::class, 'index']);
Route::get('/home',  [HomeController::class, 'index']);


Route::get('/home', function ()
    {
    dd(Articles::query()
    ->where('title', 'Первый')
    ->orWhere('price')
    ->get());
    });
            Route::get('/home', function ()
            {
                dd(Articles::all());
            });
Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
Route::POST('articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::get('articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
Route::delete('articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');

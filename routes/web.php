<?php
use App\Http\Controllers\DynamicContentController;
use App\Http\Controllers\ViewController;
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

Route::get('/about', [ViewController::class, 'about'])->name('about');

Route::get('/projects', [ViewController::class, 'projects'])->name('projects');

Route::get('/resume', [ViewController::class, 'resume'])->name('resume');
Route::get('/lets_talk', [ViewController::class, 'letsTalk'])->name('lets_talk');


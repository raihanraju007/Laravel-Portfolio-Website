<?php

use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServicePagesController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function (){
//   return view('pages.index');
//});
Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/admin/dashboard', [PagesController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/main', [MainPagesController::class, 'index'])->name('admin.main');
Route::put('/admin/main', [MainPagesController::class, 'update'])->name('admin.main.update');
Route::get('/admin/services/create', [ServicePagesController::class, 'create'])->name('admin.services.create');
Route::post('/admin/services/create', [ServicePagesController::class, 'store'])->name('admin.services.store');
//Route::get('/admin/services/show', [ServicePagesController::class, 'show'])->name('admin.services.show');
Route::get('/admin/services/list', [ServicePagesController::class, 'list'])->name('admin.services.list');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php
use App\Http\Controllers\Aboutscontroller;
use App\Http\Controllers\Historyscontroller;
use App\Http\Controllers\Pengalamancontroller;
use App\Http\Controllers\Hubungicontroller;
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
Route::resources([
    'abouts'=>Aboutscontroller::class,
    'historys'=>Historyscontroller::class,
    'pengalaman'=>Pengalamancontroller::class,
    'hubungi'=>Hubungicontroller::class,
//route::get('/about', [Aboutcontroller::class, 'index']);
//route::get('/about/create', [Aboutcontroller::class, 'create']);
//route::post('/about', [Aboutcontroller::class, 'store']);
//route::get('/about/{id}', [Aboutcontroller::class, 'show']);
//route::get('/about/{id}/edit', [Aboutcontroller::class, 'edit']);
//route::put('/about/{id}', [Aboutcontroller::class, 'update']);
//route::delete('/about/{id}', [Aboutcontroller::class, 'destroy']);

]);

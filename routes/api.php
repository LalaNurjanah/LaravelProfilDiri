<?php

use App\Http\Controllers\Api\Aboutscontroller;
use App\Http\Controllers\Api\Historyscontroller;
use App\Http\Controllers\Api\Hubungicontroller;
use App\Http\Controllers\Api\Pengalamancontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
route::get('/abouts/{id}', [Aboutscontroller::class, 'show']);
route::put('/abouts/{id}', [Aboutscontroller::class, 'update']);
route::delete('/abouts/{id}', [Aboutscontroller::class, 'destroy']);

route::get('', [Aboutscontroller::class, 'index']);
route::resources([
    'abouts' =>Aboutscontroller::class,
    'historys' =>Historyscontroller::class,
    'pengalaman' =>Pengalamancontroller::class,
    'hubungi' =>Hubungicontroller::class,
]);
route::get('/historys/addmember/{history}', [Historyscontroller::class, 'addmember']);
route::put('/historys/addmember/{history}', [Historyscontroller::class, 'updateaddmember']);
route::put('/historys/delateaddmember/{history}', [Historyscontroller::class, 'delateaddmember']);
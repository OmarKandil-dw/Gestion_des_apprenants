<?php

use App\Http\Controllers\ApprenantsController;
use App\Http\Controllers\PromotionController;
use App\Models\Apprenants;
use App\Models\promotion;
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

// Promotions routes 

Route::get('/index', [PromotionController::class , 'select']);

Route::get('/add', [PromotionController::class ,'add']);

Route::get('/insert', [PromotionController::class ,'insert']);

Route::get('/deletepromo', [ PromotionController::class,'deletepromo' ]);

Route::get('/update_promotion/{id}', [ PromotionController::class,'update_promotion' ]);

Route::get('/edit/{id}', [ PromotionController::class,'edit']);

Route::get('search/{name}',[PromotionController::class,'search']);

Route::get('search',[PromotionController::class,'search']);





// Apprenants routes 


Route::get('/selectapprenants', [ApprenantsController::class , 'selectapprenants']);

Route::get('/insertapprenants', [ApprenantsController::class ,'insert']);

Route::get('/delete', [ ApprenantsController::class,'delete' ]);

Route::get('/update_apprenants/{id}', [ ApprenantsController::class,'update_apprenants' ]);

Route::get('/edit_apprenants/{id}', [ ApprenantsController::class,'edit_apprenants' ]);

// Route::get('update_promotion/{id}', [ PromotionController::class, 'show_appr_by_prom' ]);







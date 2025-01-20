<?php

use App\Http\Controllers\FelhasznaloController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/main', function () {
    return view('main');
})->name('main.page');

Route::get('/felhasznalok/all',[FelhasznaloController::class,'listAll'])->name('users.list');
Route::get('/felhasznalok/add', [FelhasznaloController::class,'addOneUser'])->name('user.add');
Route::post('/felhasznalok/add', [FelhasznaloController::class,'storeOneUser'])->name('user.store');
Route::delete('/felhasznalo/{id}', [FelhasznaloController::class, 'deleteOneUserById'])->name('user.destroy');
Route::get('/felhasznalok/{id}',[FelhasznaloController::class,'listOneById'])->name('user.one');
Route::get('/felhasznalok/update/{id},',[FelhasznaloController::class,'modifyOneUserById'])->name('get.update');
Route::put('/felhasznalok/update/{id},',[FelhasznaloController::class,'updateOneUserById'])->name('user.update');


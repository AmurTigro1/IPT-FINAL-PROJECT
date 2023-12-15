<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManhwaController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CharacterController;

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
Route::get('/base', function () {
    return view('base');
});
Route::get('/', function () {
    return view('base');
}); 
//Manhwa
Route::get('/manhwas', [ManhwaController::class,'index'])->name('manhwa');
Route::get('/manhwas/create', [ManhwaController::class,'create']);
Route::post('/manhwas/create', [ManhwaController::class,'store']);
Route::get('/manhwas/{manhwa}', [ManhwaController::class,'edit']);
Route::post('/manhwas/{manhwa}', [ManhwaController::class,'update']);
Route::delete('manhwas/delete/{manhwa}', [ManhwaController::class,'delete']);



//Characters 
Route::get('/characters', [CharacterController::class,'index'])->name('character');
Route::get('characters/create', [CharacterController::class,'create']);
Route::post('/characters/create', [CharacterController::class,'store']);
Route::get('/characters/{character}', [CharacterController::class,'edit']);
Route::post('/characters/{character}', [CharacterController::class,'update']);
Route::delete('characters/delete/{character}', [CharacterController::class,'delete']);

//Skills
Route::get('/skills', [SkillController::class,'index'])->name('skill');
Route::get('skills/create', [SkillController::class,'create']);
Route::post('/skills/create', [SkillController::class,'store']);
Route::get('/skills/{skill}', [SkillController::class,'edit']);
Route::post('/skills/{skill}', [SkillController::class,'update']);
Route::delete('skills/delete/{skill}', [SkillController::class,'delete']);


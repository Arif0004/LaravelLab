<?php


use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\CreateAccountController;
use App\Http\Controllers\forgetPassController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;





/*Route::get('/forgetPass',[forgetPassController::class, 'gotoforgetpass']);*/
Route::get('/',[HomePageController::class,'gotoHomePage']);
Route::get('About',[AboutPageController::class,'gotoAboutPag']);
Route::get('/login',[UserController::class,'GoLoginPage']);
Route::get('/reg',[UserController::class,'gotoRegisterPage']);
Route::post('/save_user',[UserController::class,'addNewUser']);
Route::get('/TODO',[TodoController::class,'gotoTodo']);
Route::get('/TODO.add',[TodoController::class,'gotoTodoView']);
Route::post('/store_new_post',[TodoController::class,'addNewPost']);


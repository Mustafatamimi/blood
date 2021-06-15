<?php

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
Route::get('login','App\Http\Controllers\LogAndRegister\LogAndRegisControll@show');
Route::prefix('new')->group(function(){
    Route::post('addDonor','App\Http\Controllers\Donors\DonorController@addNewDonor');

    Route::post('addSeeker','App\Http\Controllers\Seekers\SeekerController@addNewSeeker');

});




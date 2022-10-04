<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Admincontroller;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[Homecontroller::class,'index']);

//user and admin login
Route::get('/home',[Homecontroller::class,'redirect'])->middleware('auth','verified') ;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home');
    })->name('dashboard');

    //user appointment 
Route::post('/appointment',[Homecontroller::class,'appointment']);

});

//add doctor page in dashboard
Route::get('/add_doctor',[Admincontroller::class,'addview']);

//insert record into database
Route::post('/upload_doctor',[Admincontroller::class,'upload']);


//view user's appointment
Route::get('/myappointment',[Homecontroller::class,'myappointment']);

//user cancelling appointment
Route::get('/cancel_appoint/{id}',[Homecontroller::class,'cancel_appoint']);

//appointment details in dashboard
Route::get('/showappointment',[Admincontroller::class,'showappointment']);

//admin activities 
Route::get('/approved/{id}',[Admincontroller::class,'approved']);
Route::get('/cancel/{id}',[Admincontroller::class,'cancel']);

//doctor details in dashboard
Route::get('/showdoctor',[Admincontroller::class,'showdoctor']);

//delete doctor details
Route::get('/delete/{id}',[Admincontroller::class,'delete']);

//edit page of doctor details
Route::get('/edit/{id}',[Admincontroller::class,'edit']);

//updating doctor details
Route::post('/editdoctor/{id}',[Admincontroller::class,'editdoctor']);

//view doctor
Route::get('/view/{id}',[Admincontroller::class,'view']);

//view patient details
Route::get('/showpatient',[Admincontroller::class,'showpatient']);

//email page
Route::get('/emailview/{id}',[Admincontroller::class,'emailview']);

//send email
Route::post('/sendemail/{id}',[Admincontroller::class,'sendemail']);



Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');


Route::get('/adminhome',[Admincontroller::class,'adminhome']);


Route::get('/viewappointment',[Admincontroller::class,'viewappointment']);

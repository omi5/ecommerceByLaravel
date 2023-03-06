<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
// use App\Models\Customer;

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
Route::get('/',[RegistrationController::class , 'index']);
Route::get('/register',[RegistrationController::class , 'form']);
Route::post('/register',[RegistrationController::class ,'register']);

Route::group(['prefix' => '/customer'], function(){
    Route::get('/',[CustomerController::class,'index']);
    Route::get('/view',[CustomerController::class,'view']);
    Route::get('/trash',[CustomerController::class,'trash']);
    Route::post('/',[CustomerController::class,'store']);
    Route::get('/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete');
    Route::get('/force-delete/{id}',[CustomerController::class,'forceDelete'])->name('customer.force-delete');
    Route::get('/restore/{id}',[CustomerController::class,'restore'])->name('customer.restore');
    Route::get('/edit/{id}',[CustomerController::class,'edit'])->name('customer.edit');
    Route::post('/update/{id}',[CustomerController::class,'update'])->name('customer.update');
});



Route::get('get-all-session', function(){
    $session = session()->all();

    echo "<pre>";
    print_r($session);

    echo "</pre>";
});

Route::get('set-session', function(Request $request){
    $request->session()->put('user-name','test');
    $request->session()->put('user-id','10');
    $request->session()->flash('status','success');

    return redirect('get-all-session');
});

Route::get('delete-session', function(){
    // session()->forget(['user-id','user-name']);
    session()->flush();

    return redirect('get-all-session');
});

Route::get('/upload', function (){
    return view('upload');
});

Route::post('/upload',[CustomerController::class,'upload']);
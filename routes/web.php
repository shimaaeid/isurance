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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function(){
//     return view('front/about');

// })->name('front.about');

// Route::get('/contact', function(){
//     return view('front/contact');

// })->name('front.contact');

// Route::get('/insurance', function(){
//     return view('front/insurance');

// })->name('front.insurance');

// Route::get('/resourcess', function(){
//     return view('front/resourcess');

// })->name('front.resourcess');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::group(['middleware' => ['auth']], function() {

    Route::get('/', function(){
        return view('admin.layouts.master');
    });
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('contract', 'ContractController');
    Route::resource('relatives_type', 'RelativesTypeController');
    Route::resource('insurance_type', 'InsurancetypeController');
    Route::resource('evaluation_type', 'EvaluationTypeController');
    Route::resource('insurance_grade','InsuranceGrateController');
    Route::resource('employee', 'EmployeeController');
    Route::get('/employeeDetails/{id}', 'EmployeeController@show');
    Route::resource('emp_relatives', 'EmpRelativesController');
    Route::resource('media', 'MediaController');
    Route::get('view_file/{id}/{file_name}', 'MediaController@open_file');
    Route::get('download/{id}/{file_name}', 'MediaController@download');

});





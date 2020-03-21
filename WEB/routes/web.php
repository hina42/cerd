<?php

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
//     return view('dashboard');
// });
// Route::get('/',function(){
//     return view('dashboard');
//});
 Route::get('/',['uses'=>'AdminController@show', 'as'=>'admin.show']);
// Route::get('/{name}{password}',function(){
//     return route('');
// });
Route::get('/employee',['uses'=>'EmployeeController@show', 'as'=>'employee.show']);
Route::get('/create',['uses'=>'AdminController@create', 'as'=>'admin.create']);
Route::get('/edit',['uses'=>'AdminController@edit', 'as'=>'admin.edit']);
Route::get('/creates',['uses'=>'EmployeeController@create', 'as'=>'employee.create']);
Route::get('/store',['uses'=>'EmployeeController@store', 'as'=>'employee.store']);
Route::get('/employeeedit',['uses'=>'EmployeeController@edit', 'as'=>'employee.edit']);
Route::get('/employeedel',['uses'=>'EmployeeController@del', 'as'=>'employee.del']);
Route::get('/employeeupdate',['uses'=>'EmployeeController@update', 'as'=>'employee.update']);
Route::get('/depcreates',['uses'=>'DepartmentController@create', 'as'=>'department.create']);
Route::get('/depedits',['uses'=>'DepartmentController@edit', 'as'=>'department.edit']);


// Route::get('/icons', function () {
//     return view('icons');
// });

// Route::get('/map', function () {
//     return view('map');
// });
 
// Route::get('/notifications', function () {
//     return view('notifications');
// });

// Route::get('/tables', function () {
//     return view('tables');
// });

// Route::get('/typography', function () {
//     return view('typography');
// });

// Route::get('/upgrade', function () {
//     return view('upgrade');
// });

// Route::get('/users', function () {
//     return view('users');
// });
//Route::view('login','cerd'); 

    //return view('cerd');
//Route::get('login','LoginController@signup');
Route::resource('login','RecordController');

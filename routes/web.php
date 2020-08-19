<?php
use App\DataTables\UsersDataTable;
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
    return view('auth.login');
});
Route::get('/metronic', function () {
    return view('admin.dashboard');
});
Route::get('/admin/permission', function () {
    return view('index');
});
Auth::routes();

Route::get('/login/multiuser', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/multiuser', 'Auth\RegisterController@showAdminRegisterForm');

Route::post('/login/multiuser', 'Auth\LoginController@adminLogin');
// Route::get('/register/multiuser', 'Auth\RegisterController@createAdmin');
Route::post('/register/multiuser', 'Auth\RegisterController@createAdmin');


Route::view('/admin', 'admin')->middleware('auth');
Route::view('/multiuser', 'multiuser');

// Route::group(['middleware' => 'auth:multiuser'], function () {
//     Auth::routes();
//     Route::view('/admin',' multiuser');
//     });

// Route::get('/multiuser/login', 'Auth\MultisuerLoginController@showLoginForm')->name('multiuser.login');
// Route::post('/multiuser/login', 'Auth\MultiuserLoginController@login')->name('multiuser.login.post');
// Route::post('/multiuser/logout', 'Auth\MultiuserLoginController@logout')->name('multiuser.logout');

//Route::get('admin', 'UserController@index')->name('index');

// Route::resource('multiuser','MultiuserController');
Route::group(['middleware'=>['auth']],function (){

   

//    Route::get('/admin', 'Admin\DashboardController@index');
    // Route::get('/admin', 'Admin\DashboardController@showAllTor');
    // Route::get('admin/multiuser/register', 'MultiuserController@create');
    // Route::get('admin/multiuser/login', 'Auth\MultiuserLoginController@login');
    Route::get('/admin', 'TenderController@showAllTender');
    Route::get('admin/report','TenderController@reporting');
   // Route::get('/admin', 'TenderController@showClosingDate');

    // Route::get('/admin', 'Admin\DashboardController@store');
   // Route::resource('role','RoleController');
  //  Route::resource('permission','PermissionController');
//  Route::get('admin/multiuser/create', 'MultiuserController@create');
//  Route::resource('multiuser','MultiuserController');
 Route::resource('user','UserController');
 Route::get('admin/user/pdf/{id}','UserController@downloadPDF');
 Route::resource('role','RoleController');
 Route::resource('permission','PermissionController');

 // Route::get('/user', 'UserController@index');
//  Route::get('/user/create', 'UserController@create');
//  Route::get('/user/edit', 'UserController@index');
// Route::resource('company','CompanyController');
Route::get('admin/company/create_step1', 'CompanyController@createStep1');
Route::post('admin/company/create_step1', 'CompanyController@postCreateStep1');

Route::get('admin/company/create_step2', 'CompanyController@createStep2');
Route::post('admin/company/create_step2', 'CompanyController@postCreateStep2');

Route::get('admin/company/create_step3', 'CompanyController@createStep3');
Route::post('admin/company/create_step3', 'CompanyController@store');

Route::get('admin/company/edit', 'CompanyController@edit')->name('admin.company.edit');
Route::post('admin/company/edit/{id}', 'CompanyController@update');

Route::get('admin/company', 'CompanyController@index');
Route::get('admin/company/show/{id}', 'CompanyController@show');
Route::resource('company','CompanyController');

Route::resource('admin/category','CategoryController');

Route::resource('admin/tender','TenderController');

//TOR

Route::get('admin/tor/create_step1', 'torController@createStep1');
Route::post('admin/tor/create_step1', 'torController@postCreateStep1');

Route::get('admin/tor/create_step2', 'torController@createStep2');
Route::post('admin/tor/create_step2', 'torController@postCreateStep2');

Route::get('admin/tor/create_step3', 'torController@createStep3');
Route::post('admin/tor/create_step3', 'torController@postCreateStep3');

Route::get('admin/tor/create_step4', 'torController@createStep4');
Route::post('admin/tor/create_step4', 'torController@postCreateStep4');

// Route::get('admin/tor/create_step5', 'TorController@createStep5');
Route::post('admin/tor/create_step4', 'TorController@store');

Route::get('admin/tor/edit', 'TorController@edit')->name('admin.tor.edit');
Route::post('admin/tor/edit/{id}', 'TorController@update');

//Route::get('admin/tor/downloadPDF/{id}','TorController@downloadPDF');
//Route::get('admin/tor/{id}','TorController@export_pdf');

Route::get('admin/tor', 'TorController@index');
Route::get('admin/tor/pdf', 'TorController@e_tender');
Route::get('admin/tor/list', 'TorController@list');
Route::post('admin/tor/list', 'TorController@postStore');
Route::get('admin/tor/apply', 'TorController@apply');
Route::post('admin/tor/apply', 'TorController@submit');
Route::get('admin/tor/invoice/{id}','TorController@downloadPDF');
// Route::get('admin/tor/list/{id}', 'TorController@createStep1');
Route::resource('tor','TorController');

//e-tender
Route::get('admin/e_tender', 'ETenderController@index');
Route::resource('e_tender','ETenderController');
//Route::get('admin/e_tender/downloadPDF/{id}','ETenderController@downloadPDF');

//Route::get('admin/file', 'FileController@index');
//Route::get('admin/file/create','FileController@create');
//Route::post('admin/file/create','FileController@store');
//Route::post('admin/file/create', 'FileController@storeMedia')
//  ->name('file.storeMedia');
Route::post('admin/file/create', 'FileController@storeMedia')
  ->name('file.storeMedia');
Route::resource('admin/file','FileController');

//bidder

Route::get('admin/bidder/create_step1', 'BidderController@createStep1');
Route::post('admin/bidder/create_step1', 'BidderController@postCreateStep1');

Route::get('admin/bidder/create_step2', 'BidderController@createStep2');
Route::post('admin/bidder/create_step2', 'BidderController@postCreateStep2');

Route::get('admin/bidder/create_step3', 'BidderController@createStep3');
Route::post('admin/bidder/create_step3', 'BidderController@postCreateStep3');

Route::get('admin/bidder/create_step4', 'BidderController@createStep4');
Route::post('admin/bidder/create_step4', 'BidderController@store');

Route::get('admin/bidder/edit', 'BidderController@edit')->name('admin.Bidder.edit');

Route::get('admin/bidder/show/{id}', 'BidderController@show')->name('admin.Bidder.show');
Route::post('admin/bidder/edit/{id}', 'BidderController@update');

Route::get('admin/bidder', 'BidderController@index');
Route::resource('bidder','BidderController');

//form
Route::get('admin/bsf', 'BsfController@index');
Route::get('admin/bsf/create', 'BsfController@create');
Route::post('admin/bsf/create', 'BsfController@store');
Route::get('admin/bsf/show','BsfController@apply');
Route::get('admin/bsf/{id}','BsfController@list');
Route::resource('admin/bsf','BsfController');

//Template

Route::get('admin/template/create_step1', 'TemplateController@createStep1');
Route::post('admin/template/create_step1', 'TemplateController@postCreateStep1');

Route::get('admin/template/create_step2', 'TemplateController@createStep2');
Route::post('admin/template/create_step2', 'TemplateController@postCreateStep2');

Route::get('admin/template/create_step3', 'TemplateController@createStep3');
Route::post('admin/template/create_step3', 'TemplateController@postCreateStep3');

Route::get('admin/template/create_step4', 'TemplateController@createStep4');
Route::post('admin/template/create_step4', 'TemplateController@postCreateStep4');

Route::get('admin/template/create_step5', 'TemplateController@createStep5');
Route::post('admin/template/create_step5', 'TemplateController@store');

Route::get('admin/template/edit', 'TemplateController@edit')->name('admin.template.edit');
Route::post('admin/template/edit/{id}', 'TemplateController@update');

//Route::get('admin/template/downloadPDF/{id}','templateController@downloadPDF');
//Route::get('admin/template/{id}','templateController@export_pdf');

Route::get('admin/template', 'TemplateController@index');
Route::get('admin/template/pdf', 'TemplateController@e_tender');
Route::resource('template','TemplateController');

Route::get('admin/test', 'TestController@index');
Route::get('admin/test/create', 'TestController@create');
Route::post('admin/test/create', 'TestController@store');
Route::get('admin/test/list', 'TestController@list');
Route::resource('test','TestController');
});

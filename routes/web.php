<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BusinessAreaController;


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



Route::get('/',function(){
    return view('homepage');
});
Route::get('/AdvanceSearch', function () {
    return view('advanceSearchPage');
});
Route::get('/locationsPage', function () {
    return view('locationsPage');
});
Route::get('/organizations', function () {
    return view('organizationsPage');
});

Route::get('/legal-entity-roles', function () {
    return view('legalEntityRolesPage');
});

Route::get('/found-sources', function () {
    return view('foundSourcesPage');
});

Route::get('/mission-type', function () {
    return view('missionTypePage');
});

Route::get('/project-targets', function () {
    return view('projectTargetsPage');
});

Route::get('/search-results', function () {
    return view('searchResultsPage');
});


Route::get('/location-clicking', function () {
    return view('locationClickingPage');
});

Route::get('/low-evolution', function () {
    return view('lowEvolutionPage');
});
Route::get('/demo', function () {
    return view('demo');
});
Route::get('/organization-clicking', function () {
    return view('organizationClickingPage');
});
Route::get('/mission-type-clicking', function () {
    return view('missionTypeClickingpage');
});
Route::get('/found-sources-clicking', function () {
    return view('foundSourcesClickingPage');
});
Route::get('/legal-entity-roles-clicking', function () {
    return view('legalEntityClickingPage');
});
Route::get('/project-target-clicking', function () {
    return view('projectTargetClickingPage');
});
// Route::get('/admin' ,[UserController::class , 'admin'])->name('admin');
// Route::get('/admintable' ,[UserController::class , 'admintable'])->name('admintable');
// Route::get('/user/login' ,[UserController::class , 'login'])->name('user.login');
// Route::get('/user/register' ,[UserController::class , 'register'])->name('user.register');
// Route::post('/user/save' ,[UserController::class , 'save'])->name('user.save');
// Route::post('/user/check' ,[UserController::class , 'check'])->name('user.check');
// Route::get('/dashboardview' ,[UserController::class , 'dashboard'])->name('dashboard');

Auth::routes();
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::controller(BusinessAreaController::class)->group(function () {
  Route::post('/businessAreaCreate',  'create')->name('businessAreaCreate');
  Route::get('/businessAreaRead/{id}' , 'read')->name('businessAreaRead');
  Route::post('/businessAreaUpdate/{id}',  'update')->name('businessAreaUpdate');
  Route::get('/businessAreaDelete/{id}',  'delete')->name('businessAreaDelete');
  Route::get('/addBusiness',  'createPage')->name('addBusiness');
  Route::get('/businessArea' , 'readPage')->name('businessArea');
  Route::get('/updateBusiness/{id}' , 'updatePage')->name('updateBusiness');
});

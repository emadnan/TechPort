<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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



Route::get('/',[HomeController::class, 'homePage']);
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
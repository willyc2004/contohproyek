<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WriterController;
use App\Models\Writer;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index', [
        "pagetitle" => "Home",
        "maintitle" => "Welcome to SomeEggs Library"
    ]);
});


Route::get('/writer', [WriterController::class, 'writer']);

Route::get('/writer/{id}', [WriterController::class, 'showWriter']);


Route::get('/project/{code}', [ProjectController::class, 'show']);

Route::get('/project', [ProjectController::class, 'project']);

Route::get('/menu', [ProjectController::class, 'menu']);


// Route::get('/menu', function () {
//     return view('menu', [
//         "pagetitle" => "AFL1",
//         "maintitle" => "Menu",
//         'menus' => Menu::allData()
//     ]);
// });

// Route::get('/project/{code}', function ($code) {
//     return view('showproject', [
//         'pagetitle' => 'Detail Project',
//         'maintitle' => 'Detail Project',
//         'pro' => Project::dataWithCode($code)
//     ]);
// });


Route::view('/tentangkita', 'about', [
    "pagetitle" => "About Us",
    "maintitle" => "About SomeEggs Library"
]);

Route::view('/kontakkita', 'contact', [
    "pagetitle" => "Contact",
    "maintitle" => "Contact Data"
]);

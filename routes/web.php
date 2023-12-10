<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Admin\SalesController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Editor\ShopController as EditorShopController;
use App\Http\Controllers\WriterController;
use App\Models\Writer;
use Illuminate\Support\Facades\Auth;
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




Route::get('/writer/{writer}', [WriterController::class, 'showWriter']);


Route::get('/project/{code}', [ProjectController::class, 'show']);

Route::get('/project', [ProjectController::class, 'project']);

Route::get('/menu', [ProjectController::class, 'menu']);

Route::group([
    'middleware' => 'admin',
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::get('/shop', [ShopController::class, 'index'])->name('shop');

    Route::get('/sales', [SalesController::class, 'index'])->name('sales');
});

Route::group([
    'middleware' => 'editor',
    'prefix' => 'editor',
    'as' => 'editor.'
], function () {
    Route::get('/shop', [EditorShopController::class, 'index'])->name('shop');
});

Route::get('/writer', [WriterController::class, 'writer'])->middleware('auth')->name('writer');






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

Route::view('/blog', 'blog', [
    "pagetitle" => "About Us",
    "maintitle" => "About SomeEggs Library"
]);


Route::view('/tentangkita', 'about', [
    "pagetitle" => "About Us",
    "maintitle" => "About SomeEggs Library"
]);

Route::view('/kontakkita', 'contact', [
    "pagetitle" => "Contact",
    "maintitle" => "Contact Data"
]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

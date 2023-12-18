<?php

use App\Http\Controllers\HomeController;
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
// Route::get('/shop/create', [ShopController::class, 'create'])->middleware('auth')->name('shop.create');
// Route::post('/shop/store', [ShopController::class, 'store'])->middleware('auth')->name('shop.store');
// Route::get('/shop/edit/{shop}', [ShopController::class, 'edit'])->middleware('auth')->name('shop.edit');
// Route::put('/shop/update/{shop}', [ShopController::class, 'update'])->middleware('auth')->name('shop.update');
// Route::delete('/shop/destroy/{shop}', [ShopController::class, 'destroy'])->middleware('auth')->name('shop.destroy');

Route::group([
    'middleware' => 'admin',
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    // Shop CRUD routes
    Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
    Route::get('/shop/create', [ShopController::class, 'create'])->name('shop.create');
    Route::post('/shop/store', [ShopController::class, 'store'])->name('shop.store');
    Route::get('/shop/edit/{shop}', [ShopController::class, 'edit'])->name('shop.edit');
    Route::put('/shop/update/{shop}', [ShopController::class, 'update'])->name('shop.update');
    Route::delete('/shop/destroy/{shop}', [ShopController::class, 'destroy'])->name('shop.destroy');
    Route::get('/shop/show/{shop}', [ShopController::class, 'show'])->name('shop.show');

    // Other admin routes
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

Route::get('/home', [HomeController::class, 'index'])->name('home');

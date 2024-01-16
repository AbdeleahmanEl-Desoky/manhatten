<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');

    return "Cache cleared successfully";
});


Route::get('times_square',[HomeController::class,'times_square'] )->name('times_square');
 Route::get('vessel',[HomeController::class,'vessel'])->name('vessel');
 Route::get('/', [HomeController::class,'home'] )->name('home');
 Route::get('/one_world', function () {return view('website.one_world.one_world');})->name('one_world');
 Route::get('/rockefeller', function () {return view('website.rockefeller.rockefeller');})->name('rockefeller');
 Route::get('/charging_bull', function () {return view('website.charging_bull.charging_bull');})->name('charging_bull');
 Route::get('/wall_street', function () {return view('website.wall_street.wall_street');})->name('wall_street');
 Route::get('/little_island', function () {return view('website.little_island.little_island');})->name('little_island');
 Route::get('/centra_park', function () {return view('website.centra_park.centra_park');})->name('centra_park');
 Route::get('/south_street', function () {return view('website.south_street.south_street');})->name('south_street');
 Route::get('/statue_of_liberty', function () {return view('website.statue_of_liberty.statue_of_liberty');})->name('statue_of_liberty');
 Route::get('/brooklyn_bridge', function () {return view('website.brooklyn_bridge.brooklyn_bridge');})->name('brooklyn_bridge');
 Route::get('highline', [HomeController::class,'highline'] )->name('highline');
 Route::get('/edge', function () {return view('website.edge.edge');})->name('edge');
Route::get('united_nations_headquarters', function () {return view('website.united_nations_headquarters.united_nations_headquarters');})->name('united_nations_headquarters');
Route::get('Chinatown', function () {return view('website.Chinatown.Chinatown');})->name('Chinatown');
Route::get('empire_state', function () {return view('website.empire_state.empire_state');})->name('empire_state');

 Route::get('italy, ', function () { return view('website.little_italy.little_italy'); })->name('little_italy');

Route::post('message', [HomeController::class,'message'])->name('message');

Route::get('/content', function () {
    return view('website.contact.index');
})->name('content');

Route::get('/about', function () {
    return view('website.about.index');
})->name('about');

Route::get('/article', function () {
    return view('website.article.index');
})->name('article');

Route::get('/privacy', function () {
    return view('website.privacy.index');
})->name('privacy');

Route::get('/test', function () {
    return view('website.test');
})->name('test');

Route::get('/section', function () {
    return view('website.section.index');
})->name('section');

Route::get('/Design', function () {
    return view('website.article.Design');
})->name('Design');

Route::get('/Design_two', function () {
    return view('website.article.Design_two');
})->name('Design_two');
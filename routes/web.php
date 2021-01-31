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

Route::get('/', function () {
    return view('frontendpage.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// slider route here
Route::get('/slidder', [App\Http\Controllers\slidderController::class, 'index'])->name('slidder');
Route::post('store/slidder', [App\Http\Controllers\slidderController::class, 'storeslidder'])->name('store.slidder');
Route::get('all/slidder/', [App\Http\Controllers\slidderController::class, 'allslidder'])->name('all.slidder');
Route::get('edit/slidder/{id}', [App\Http\Controllers\slidderController::class, 'editslidder']);
Route::post('update/slidder/{id}', [App\Http\Controllers\slidderController::class, 'updateslidder']);
Route::get('delete/slidder/{id}', [App\Http\Controllers\slidderController::class, 'deleteslidder']);

//blog route here 

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::post('store/blog', [App\Http\Controllers\BlogController::class, 'storeblog'])->name('store.blog');
Route::get('all/blog/', [App\Http\Controllers\BlogController::class, 'allblog'])->name('all.blogs');
Route::get('edit/blog/{id}', [App\Http\Controllers\BlogController::class, 'editblog']);
Route::post('update/blog/{id}', [App\Http\Controllers\BlogController::class, 'updateblog']);
Route::get('delete/blog/{id}', [App\Http\Controllers\BlogController::class, 'deleteblog']);
//chefs route here 
Route::get('/chefs', [App\Http\Controllers\ChefsController::class, 'index'])->name('chefs');
Route::post('store/chefs', [App\Http\Controllers\ChefsController::class, 'storechefs'])->name('store.chefs');
Route::get('all/chefs/', [App\Http\Controllers\ChefsController::class, 'allchefs'])->name('all.chefs');
Route::get('edit/chefs/{id}', [App\Http\Controllers\ChefsController::class, 'editchefs']);
Route::post('update/chefs/{id}', [App\Http\Controllers\ChefsController::class, 'updatechefs']);
Route::get('delete/chefs/{id}', [App\Http\Controllers\ChefsController::class, 'deletechefs']);

//menus route here 

Route::get('/menus', [App\Http\Controllers\MenussController::class, 'index'])->name('menus');
Route::post('store/menus', [App\Http\Controllers\MenussController::class, 'storemenus'])->name('store.menus');
Route::get('all/menus/', [App\Http\Controllers\MenussController::class, 'allmenus'])->name('all.menus');
Route::get('edit/menus/{id}', [App\Http\Controllers\MenussController::class, 'editmenus']);
Route::post('update/menus/{id}', [App\Http\Controllers\MenussController::class, 'updatemenus']);
Route::get('delete/menus/{id}', [App\Http\Controllers\MenussController::class, 'deletemenus']);

//settings route here
Route::get('settings/', [App\Http\Controllers\SettingsController::class, 'index'])->name('settings');
Route::get('all/settings/', [App\Http\Controllers\SettingsController::class, 'allsettings'])->name('all.settings');
Route::post('store/settings', [App\Http\Controllers\SettingsController::class, 'storesettings'])->name('store.settings');
Route::get('edit/settings/{id}', [App\Http\Controllers\SettingsController::class, 'editsettings']);
Route::post('update/settings/{id}', [App\Http\Controllers\SettingsController::class, 'updatesettings']);
Route::get('delete/settings/{id}', [App\Http\Controllers\SettingsController::class, 'deletesettings']);

//frontend page here
Route::get('/About', [App\Http\Controllers\FrontendController::class, 'about']);
Route::get('/Chef', [App\Http\Controllers\FrontendController::class, 'Chef']);
Route::get('/Menu', [App\Http\Controllers\FrontendController::class, 'Menu']);
Route::get('/Blog', [App\Http\Controllers\FrontendController::class, 'Blog']);
Route::get('/Contact', [App\Http\Controllers\FrontendController::class, 'Contact']);

// team route here
Route::get('team/', [App\Http\Controllers\TeamController::class, 'index'])->name('team');
Route::get('all/team/', [App\Http\Controllers\TeamController::class, 'allteam'])->name('all.team');
Route::post('store/team', [App\Http\Controllers\TeamController::class, 'storeteam'])->name('store.team');
Route::get('edit/team/{id}', [App\Http\Controllers\TeamController::class, 'editteam']);
Route::post('update/team/{id}', [App\Http\Controllers\TeamController::class, 'updateteam']);
Route::get('delete/team/{id}', [App\Http\Controllers\TeamController::class, 'deleteteam']);







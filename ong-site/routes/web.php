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

Route::get("/",[App\Http\Controllers\HomeController::class, 'index'])->name('acc');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'archiever'])->name('home');

Route::group(['middleware' => "auth"],function(){
  Route::group(["prefix" => "menus"],function(){
    Route::get('/',[App\Http\Controllers\MenusController::class, 'index'])
              ->name('menus.index');
    Route::post('/create',[App\Http\Controllers\MenusController::class, 'create'])
              ->name('menus.create');
    Route::post('/update',[App\Http\Controllers\MenusController::class, 'update'])
              ->name('menus.update');
    Route::get('/edit/{id}',[App\Http\Controllers\MenusController::class, 'edit'])
              ->name('menus.edit');
    Route::get('/delete/{id}',[App\Http\Controllers\MenusController::class, 'delete'])
              ->name('menus.delete');
  });

  Route::group(["prefix" => "partenaires"],function(){
    Route::get('/',[App\Http\Controllers\PartenairesController::class, 'index'])
              ->name('partenaires.index');
    Route::post('/create',[App\Http\Controllers\PartenairesController::class, 'create'])
              ->name('partenaires.create');
    Route::post('/update',[App\Http\Controllers\PartenairesController::class, 'update'])
              ->name('partenaires.update');
    Route::get('/edit/{id}',[App\Http\Controllers\PartenairesController::class, 'edit'])
              ->name('partenaires.edit');
    Route::get('/delete/{id}',[App\Http\Controllers\PartenairesController::class, 'delete'])
              ->name('partenaires.delete');
  });

  Route::group(["prefix" => "actualites"],function(){
        Route::get('/',[App\Http\Controllers\ActualitesController::class, 'index'])
                  ->name('actualites.index');
        Route::post('/create',[App\Http\Controllers\ActualitesController::class, 'create'])
                  ->name('actualites.create');
        Route::post('/update',[App\Http\Controllers\ActualitesController::class, 'update'])
                  ->name('actualites.update');
        Route::get('/edit/{id}',[App\Http\Controllers\ActualitesController::class, 'edit'])
                  ->name('actualites.edit');
        Route::get('/delete/{id}',[App\Http\Controllers\ActualitesController::class, 'delete'])
                  ->name('actualites.delete');
    });

    Route::group(["prefix" => "sliders"],function(){
        Route::get('/',[App\Http\Controllers\SlidersController::class, 'index'])
                  ->name('sliders.index');
        Route::post('/create',[App\Http\Controllers\SlidersController::class, 'create'])
                  ->name('sliders.create');
        Route::post('/update',[App\Http\Controllers\SlidersController::class, 'update'])
                  ->name('sliders.update');
        Route::get('/edit/{id}',[App\Http\Controllers\SlidersController::class, 'edit'])
                  ->name('sliders.edit');
        Route::get('/delete/{id}',[App\Http\Controllers\SlidersController::class, 'delete'])
                  ->name('sliders.delete');
    });

    Route::group(["prefix" => "acteurs"],function(){
      Route::get('/',[App\Http\Controllers\ActeursController::class, 'index'])
                ->name('acteurs.index');
      Route::post('/create',[App\Http\Controllers\ActeursController::class, 'create'])
                ->name('acteurs.create');
      Route::post('/update',[App\Http\Controllers\ActeursController::class, 'update'])
                ->name('acteurs.update');
      Route::get('/edit/{id}',[App\Http\Controllers\ActeursController::class, 'edit'])
                ->name('acteurs.edit');
      Route::get('/delete/{id}',[App\Http\Controllers\ActeursController::class, 'delete'])
                ->name('acteurs.delete');
  });

});

Auth::routes();

Route::get('/register',function(){
  return redirect("/login");
});

Route::get('/add',function(){
  \App\Models\User::create([
    "name" => "tester",
    "email" => "ong-site",
    "password" => \Hash::make("OnG.SIte_")
  ]);
});

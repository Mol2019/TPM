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




Route::group(["namespace" => "App\Http\Controllers\Site"],function(){
    Route::get("/",[App\Http\Controllers\HomeController::class, 'index'])->name('acc');
});
Route::get("/contact",[App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

Route::get('/news',[App\Http\Controllers\HomeController::class, 'actualites'])->name('news');

Route::group(["prefix" => "news"],function(){
   Route::get("/actualites/{slug}",[App\Http\Controllers\ActualitesController::class, 'actualitesDetails'])->name('actualites.details');
});


Route::get('/sections/{title}',[App\Http\Controllers\MenusController::class, 'menuDetails'])->name('sections.details');
Route::get('/about',[App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/action',[App\Http\Controllers\HomeController::class, 'action'])->name('actions');
Route::get('/structuration',[App\Http\Controllers\EquipesController::class, 'structuration'])->name('structuration');
Route::get('/actors',[App\Http\Controllers\ActeursController::class, 'acteurs'])->name('actors');
Route::get('/partners',[App\Http\Controllers\PartenairesController::class, 'partenaires'])->name('partners');
Route::get('/projets',[App\Http\Controllers\ProgrammesController::class, 'projets'])->name('projets');
Route::get('/formations',[App\Http\Controllers\ProgrammesController::class, 'formations'])->name('formations');
Route::get("/actions/formations/{slug}",[App\Http\Controllers\ProgrammesController::class, 'formationDetails'])->name('formations.details');
Route::get("/actions/projets/{slug}",[App\Http\Controllers\ProgrammesController::class, 'projetDetails'])->name('projets.details');

Route::get("/phototheque",[App\Http\Controllers\GaleriesController::class, 'phototheque'])->name('phototheque');
Route::get("/videotheque",[App\Http\Controllers\GaleriesController::class, 'videotheque'])->name('videotheque');
Route::get("/appli-mobile",[App\Http\Controllers\HomeController::class, 'mobile'])->name('mobile');
Route::get("/nos-statuts",[App\Http\Controllers\HomeController::class, 'status'])->name('status');
Route::get("/reglement-interieur",[App\Http\Controllers\HomeController::class, 'ri'])->name('ri');
Route::get("/manuels-et-guide",[App\Http\Controllers\HomeController::class, 'mg'])->name('mg');
Route::get("/revue",[App\Http\Controllers\PublicationsController::class, 'revue'])->name('revue');
Route::get("/rapports",[App\Http\Controllers\ProgrammesController::class, 'liste'])->name('reports');
Route::get("/nos-donateurs",[App\Http\Controllers\DonateursController::class, 'liste'])->name('journal');

Route::get("/nos-news",[App\Http\Controllers\ActualitesController::class,'news'])->name('nouvelles');
Route::get("/notre-agenda",[App\Http\Controllers\ActualitesController::class,'agenda'])->name('agend');
Route::get("/nos-communiques",[App\Http\Controllers\CommuniquesController::class,'communiques'])->name('coms');
Route::get("/nos-evenements",[App\Http\Controllers\EvenementsController::class,'liste'])->name('events');
Route::get("/nos-jobs-news",[App\Http\Controllers\JobnewsController::class,'liste'])->name('jnews');
Route::get("/dans-la-presse",[App\Http\Controllers\PublicationsController::class,'presse'])->name('presse');



Route::group(['middleware' => "auth"],function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('home');

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
        Route::post('/action',[App\Http\Controllers\ActualitesController::class, 'execution'])
                  ->name('actualites.execution');      ;
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
        Route::post('/action',[App\Http\Controllers\SlidersController::class, 'execAction'])
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

  Route::group(["prefix" => "agendas"],function(){
        Route::get('/',[App\Http\Controllers\AgendasController::class, 'index'])
                ->name('agendas.index');
        Route::post('/create',[App\Http\Controllers\AgendasController::class, 'create'])
                ->name('agendas.create');
        Route::post('/update',[App\Http\Controllers\AgendasController::class, 'update'])
                ->name('agendas.update');
        Route::get('/edit/{id}',[App\Http\Controllers\AgendasController::class, 'edit'])
                ->name('agendas.edit');
        Route::get('/delete/{id}',[App\Http\Controllers\AgendasController::class, 'delete'])
                ->name('agendas.delete');
    });
    Route::group(["prefix" => "programmes"],function(){
      Route::get('/',[App\Http\Controllers\ProgrammesController::class, 'index'])
                ->name('programmes.index');
      Route::post('/create',[App\Http\Controllers\ProgrammesController::class, 'create'])
                ->name('programmes.create');
      Route::post('/update',[App\Http\Controllers\ProgrammesController::class, 'update'])
                ->name('programmes.update');
      Route::get('/edit/{id}',[App\Http\Controllers\ProgrammesController::class, 'edit'])
                ->name('programmes.edit');
      Route::get('/delete/{id}',[App\Http\Controllers\ProgrammesController::class, 'delete'])
                ->name('programmes.delete');
  });

  Route::group(["prefix" => "galeries"],function(){
        Route::get('/',[App\Http\Controllers\GaleriesController::class, 'index'])
                ->name('galeries.index');
        Route::post('/create',[App\Http\Controllers\GaleriesController::class, 'create'])
                ->name('galeries.create');
        Route::post('/update',[App\Http\Controllers\GaleriesController::class, 'update'])
                ->name('galeries.update');
        Route::get('/edit/{id}',[App\Http\Controllers\GaleriesController::class, 'edit'])
                ->name('galeries.edit');
        Route::get('/delete/{id}',[App\Http\Controllers\GaleriesController::class, 'delete'])
                ->name('galeries.delete');
    });

    Route::group(["prefix" => "donateurs"],function(){
        Route::get('/',[App\Http\Controllers\DonateursController::class, 'index'])
                  ->name('donateurs.index');
        Route::post('/create',[App\Http\Controllers\DonateursController::class, 'create'])
                  ->name('donateurs.create');
        Route::post('/update',[App\Http\Controllers\DonateursController::class, 'update'])
                  ->name('donateurs.update');
        Route::get('/edit/{id}',[App\Http\Controllers\DonateursController::class, 'edit'])
                  ->name('donateurs.edit');
        Route::get('/delete/{id}',[App\Http\Controllers\DonateursController::class, 'delete'])
                  ->name('donateurs.delete');
    });

    Route::group(["prefix" => "membres"],function(){
        Route::get('/',[App\Http\Controllers\MembresController::class, 'index'])
                  ->name('membres.index');
        Route::post('/create',[App\Http\Controllers\MembresController::class, 'create'])
                  ->name('membres.create');
        Route::post('/update',[App\Http\Controllers\MembresController::class, 'update'])
                  ->name('membres.update');
        Route::get('/edit/{id}',[App\Http\Controllers\MembresController::class, 'edit'])
                  ->name('membres.edit');
        Route::get('/delete/{id}',[App\Http\Controllers\MembresController::class, 'delete'])
                  ->name('membres.delete');
    });

    Route::group(["prefix" => "publicites"],function(){
        Route::get('/',[App\Http\Controllers\PublicitesController::class, 'index'])
                  ->name('publicites.index');
        Route::post('/create',[App\Http\Controllers\PublicitesController::class, 'create'])
                  ->name('publicites.create');
        Route::post('/update',[App\Http\Controllers\PublicitesController::class, 'update'])
                  ->name('publicites.update');
        Route::get('/edit/{id}',[App\Http\Controllers\PublicitesController::class, 'edit'])
                  ->name('publicites.edit');
        Route::get('/delete/{id}',[App\Http\Controllers\PublicitesController::class, 'delete'])
                  ->name('publicites.delete');
    });

    Route::group(["prefix" => "publications"],function(){
        Route::get('/',[App\Http\Controllers\PublicationsController::class, 'index'])
                  ->name('publications.index');
        Route::post('/create',[App\Http\Controllers\PublicationsController::class, 'create'])
                  ->name('publications.create');
        Route::post('/update',[App\Http\Controllers\PublicationsController::class, 'update'])
                  ->name('publications.update');
        Route::get('/edit/{id}',[App\Http\Controllers\PublicationsController::class, 'edit'])
                  ->name('publications.edit');
        Route::get('/delete/{id}',[App\Http\Controllers\PublicationsController::class, 'delete'])
                  ->name('publications.delete');
    });

    Route::group(["prefix" => "equipes"],function(){
        Route::get('/',[App\Http\Controllers\EquipesController::class, 'index'])
                  ->name('equipes.index');
        Route::post('/create',[App\Http\Controllers\EquipesController::class, 'create'])
                  ->name('equipes.create');
        Route::post('/update',[App\Http\Controllers\EquipesController::class, 'update'])
                  ->name('equipes.update');
        Route::get('/edit/{id}',[App\Http\Controllers\EquipesController::class, 'edit'])
                  ->name('equipes.edit');
        Route::get('/delete/{id}',[App\Http\Controllers\EquipesController::class, 'delete'])
                  ->name('equipes.delete');
    });

    Route::group(["prefix" => "contrats"],function(){
        Route::get('/',[App\Http\Controllers\ContratsController::class, 'index'])
                  ->name('contrats.index');
        Route::post('/create',[App\Http\Controllers\ContratsController::class, 'create'])
                  ->name('contrats.create');
        Route::post('/update',[App\Http\Controllers\ContratsController::class, 'update'])
                  ->name('contrats.update');
        Route::get('/edit/{id}',[App\Http\Controllers\ContratsController::class, 'edit'])
                  ->name('contrats.edit');
        Route::get('/delete/{id}',[App\Http\Controllers\ContratsController::class, 'delete'])
                  ->name('contrats.delete');
    });

    Route::group(["prefix" => "chiffres-cles"],function(){
        Route::get('/',[App\Http\Controllers\ChiffresClesController::class, 'index'])
                  ->name('chiffres-cles.index');
        Route::post('/create',[App\Http\Controllers\ChiffresClesController::class, 'create'])
                  ->name('chiffres-cles.create');
        Route::post('/update',[App\Http\Controllers\ChiffresClesController::class, 'update'])
                  ->name('chiffres-cles.update');
        Route::get('/edit/{id}',[App\Http\Controllers\ChiffresClesController::class, 'edit'])
                  ->name('chiffres-cles.edit');
        Route::get('/delete/{id}',[App\Http\Controllers\ChiffresClesController::class, 'delete'])
                  ->name('chiffres-cles.delete');
    });

    Route::group(["prefix" => "evenements"],function(){
        Route::get('/',[App\Http\Controllers\EvenementsController::class, 'index'])
                  ->name('evenements.index');
        Route::post('/create',[App\Http\Controllers\EvenementsController::class, 'create'])
                  ->name('evenements.create');
        Route::post('/update',[App\Http\Controllers\EvenementsController::class, 'update'])
                  ->name('evenements.update');
        Route::get('/edit/{id}',[App\Http\Controllers\EvenementsController::class, 'edit'])
                  ->name('evenements.edit');
        Route::get('/delete/{id}',[App\Http\Controllers\EvenementsController::class, 'delete'])
                  ->name('evenements.delete');
    });

    Route::group(["prefix" => "jobnews"],function(){
        Route::get('/',[App\Http\Controllers\JobnewsController::class, 'index'])
                  ->name('jobnews.index');
        Route::post('/create',[App\Http\Controllers\JobnewsController::class, 'create'])
                  ->name('jobnews.create');
        Route::post('/update',[App\Http\Controllers\JobnewsController::class, 'update'])
                  ->name('jobnews.update');
        Route::get('/edit/{id}',[App\Http\Controllers\JobnewsController::class, 'edit'])
                  ->name('jobnews.edit');
        Route::get('/delete/{id}',[App\Http\Controllers\JobnewsController::class, 'delete'])
                  ->name('jobnews.delete');
    });

    Route::group(["prefix" => "communiques"],function(){
        Route::get('/',[App\Http\Controllers\CommuniquesController::class, 'index'])
                  ->name('communiques.index');
        Route::post('/create',[App\Http\Controllers\CommuniquesController::class, 'create'])
                  ->name('communiques.create');
        Route::post('/update',[App\Http\Controllers\CommuniquesController::class, 'update'])
                  ->name('communiques.update');
        Route::get('/edit/{id}',[App\Http\Controllers\CommuniquesController::class, 'edit'])
                  ->name('communiques.edit');
        Route::get('/delete/{id}',[App\Http\Controllers\CommuniquesController::class, 'delete'])
                  ->name('communiques.delete');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Gestion\MenusGestion;
use App\Gestion\ActualitesGestion;
use App\Gestion\PartenairesGestion;
use App\Gestion\SlidersGestion;
use App\Gestion\ProgrammesGestion;


use App\Http\Controllers\SiteController;
use App\Models\Membre;
use App\Models\Partenaire;
use App\Models\Donateur;
use App\Models\Evenement;




class HomeController extends SiteController
{

    public function __construct()
    {
        $this->name = "index";
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->name = "index";

        $menu = new MenusGestion;
        $actualite = new ActualitesGestion;
        $partenaire = new PartenairesGestion;
        $slides = new SlidersGestion;

        $data = new Collection;
        $data->menus = $menu->all();
        $data->actualites = $actualite->all();
        $data->partenaires = $partenaire->all();
        $data->slides = $slides->all();
        $data->mp = $menu->getByParam("title","Mot du president")->first();

        return $this->viewLoader($data);
    }

    public function dashboard()
    {
        $data = new Collection;
        $data->membres = Membre::all()->count();
        $data->partenaires = Partenaire::all()->count();
        $data->donateurs = Donateur::all()->count();
        $data->evenements = Evenement::all()->count();


        return view("app.content.dashboard",compact('data'));
    }

    public function ri()
    {
        $this->name = "ouvrages.reglement";

        $data = new Collection;
         
        return $this->viewLoader($data);
    }

    public function mg()
    {
        $this->name = "ouvrages.manuels";

        $data = new Collection;
         
        return $this->viewLoader($data);
    }

    public function mobile()
    {
        $this->name = "ouvrages.mobile";

        $data = new Collection;
         
        return $this->viewLoader($data);
    }

    public function status()
    {
        $this->name = "ouvrages.statuts";

        $data = new Collection;
         
        return $this->viewLoader($data);
    }

    public function contact()
    {
        $this->name = "contact";

        $data = new Collection;
         
        return $this->viewLoader($data);
    }
}

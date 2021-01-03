<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Gestion\MenusGestion;
use App\Gestion\ActualitesGestion;
use App\Gestion\PartenairesGestion;
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
        $menu = new MenusGestion;
        $actualite = new ActualitesGestion;
        $partenaire = new PartenairesGestion;

        $data = new Collection;
        $data->menus = $menu->all();
        $data->actualites = $actualite->all();
        $data->partenaires = $partenaire->all();

        //return view('site.index',compact('data'));
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
}

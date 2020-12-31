<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Gestion\MenusGestion;
use App\Gestion\ActualitesGestion;
use App\Gestion\PartenairesGestion;



class HomeController extends Controller
{

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

        return view('site.index',compact('data'));
    }
}

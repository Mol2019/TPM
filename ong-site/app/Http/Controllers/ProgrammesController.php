<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Gestion\ProgrammesGestion;
use Illuminate\Support\Collection;


class ProgrammesController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new ProgrammesGestion();
        $this->name = "programmes";
    }

    public function projets()
    {
        $projetsView = new SiteController('programmes.projets');
        $data = new Collection;
        $data->projets = $this->tg->getByParam('is_project',true);
        return $projetsView->viewLoader($data);
    }

    public function formations()
    {
        $projetsView = new SiteController('programmes.formations');
        $data = new Collection;
        $data->formations = $this->tg->getByParam('is_project',false);
        return $projetsView->viewLoader($data);
    }

    public function projetDetails($slug)
    {
        $data = new Collection;

        $data->single = $this->tg->getByParam('slug',$slug,1)[0];
        $viewer = new SiteController('programmes.projet-details');
        return $viewer->viewLoader($data);
    }

    public function formationDetails($slug)
    {
        $data = new Collection;

        $data->single = $this->tg->getByParam('slug',$slug,1)[0];
        $viewer = new SiteController('programmes.formation-details');
        return $viewer->viewLoader($data);
    }

    public function liste()
    {
        $projetsView = new SiteController('publications.points');
        $data = new Collection;
        //$data->formations = $this->tg->getByParam('is_project',false);
        return $projetsView->viewLoader($data);
    }
}

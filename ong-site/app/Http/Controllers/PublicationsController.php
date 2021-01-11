<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Gestion\PublicationsGestion;
use Illuminate\Support\Collection;


class PublicationsController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new PublicationsGestion;
        $this->name = "publications";
    }

    public function revue()
    {
        $data = new Collection;

        //$data->single = $this->tg->getByParam('type','video');
        $viewer = new SiteController('publications.revue');
        return $viewer->viewLoader($data);
    }

    public function presse()
    {
        $data = new Collection;

        //$data->single = $this->tg->getByParam('type','video');
        $viewer = new SiteController('actualites.presse');
        return $viewer->viewLoader($data);
    }
}

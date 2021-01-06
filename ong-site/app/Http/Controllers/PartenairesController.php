<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Gestion\PartenairesGestion;
use Illuminate\Support\Collection;



class PartenairesController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new PartenairesGestion();
        $this->name = "partenaires";
    }

    public function partenaires()
    {
        $data = new Collection;

        $data->partenaires = $this->tg->all();
        $viewer = new SiteController('partenaires');
        return $viewer->viewLoader($data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Gestion\MembresGestion;
use Illuminate\Support\Collection;

class MembresController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new MembresGestion;
        $this->name = "membres";
    }

    public function formFecth ()
    {
        $data = new Collection;

        $data->partenaires = $this->tg->all();
        $viewer = new SiteController('adherer.membre');
        return $viewer->viewLoader($data);
    }
}

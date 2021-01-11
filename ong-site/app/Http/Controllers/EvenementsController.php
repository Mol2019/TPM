<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Gestion\EvenementsGestion;
use Illuminate\Support\Collection;


class EvenementsController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new EvenementsGestion;
        $this->name = "evenements";
    }

    public function liste()
    {
        $data = new Collection;

        $data->news = $this->tg->all();
        $viewer = new SiteController('actualites.evenements');
        return $viewer->viewLoader($data);
    }
}

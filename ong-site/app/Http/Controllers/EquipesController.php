<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use App\Gestion\EquipesGestion;
use Illuminate\Support\Collection;


class EquipesController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new EquipesGestion;
        $this->name = "equipes";
    }

    public function structuration()
    {
        $data = new Collection;

        $data->team = $this->tg->all();
        $viewer = new SiteController('structuration');
        return $viewer->viewLoader($data);
    }
}

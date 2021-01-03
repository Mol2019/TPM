<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Gestion\EquipesGestion;

class EquipesController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new EquipesGestion;
        $this->name = "equipes";
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gestion\GaleriesGestion;

class GaleriesController extends BaseController
{
    //

    public function __construct()
    {
        $this->tg = new GaleriesGestion;
        $this->name = "galeries";
    }
}

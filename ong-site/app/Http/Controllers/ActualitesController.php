<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Gestion\ActualitesGestion;

class ActualitesController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new ActualitesGestion();
        $this->name = "actualites";
    }
}

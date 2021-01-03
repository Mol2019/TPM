<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Gestion\PublicitesGestion;

class PublicitesController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new PublicitesGestion;
        $this->name = "publicites";
    }
}

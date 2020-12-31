<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Gestion\PartenairesGestion;



class PartenairesController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new PartenairesGestion();
        $this->name = "partenaires";
    }
}

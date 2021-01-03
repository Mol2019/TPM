<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Gestion\EvenementsGestion;

class EvenementsController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new EvenementsGestion;
        $this->name = "evenements";
    }
}

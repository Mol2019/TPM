<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Gestion\AgendasGestion;

class AgendasController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new AgendasGestion();
        $this->name = "agendas";
    }
}

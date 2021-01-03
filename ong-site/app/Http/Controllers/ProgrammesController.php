<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Gestion\ProgrammesGestion;

class ProgrammesController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new ProgrammesGestion();
        $this->name = "programmes";
    }
}

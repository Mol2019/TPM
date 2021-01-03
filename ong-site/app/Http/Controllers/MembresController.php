<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Gestion\MembresGestion;

class MembresController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new MembresGestion;
        $this->name = "membres";
    }
}

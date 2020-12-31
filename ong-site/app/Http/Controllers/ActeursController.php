<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Gestion\ActeursGestion;

class ActeursController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new ActeursGestion();
        $this->name = "acteurs";
    }
}

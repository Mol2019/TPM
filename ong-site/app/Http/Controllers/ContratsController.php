<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Gestion\ContratsGestion;

class ContratsController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new ContratsGestion;
        $this->name = "contrats";
    }
}

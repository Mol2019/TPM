<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gestion\CommuniquesGestion;

class CommuniquesController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new CommuniquesGestion;
        $this->name = "communiques";
    }
}

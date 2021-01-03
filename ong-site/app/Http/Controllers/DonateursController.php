<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Gestion\DonateursGestion;


class DonateursController extends Controller
{
    //
    public function __construct()
    {
        $this->tg = new DonateursGestion;
        $this->name= "donateurs";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gestion\SlidersGestion;

class SlidersController extends BaseController
{
    //
    //
    public function __construct()
    {
        $this->tg = new SlidersGestion();
        $this->name = "sliders";
    }
}

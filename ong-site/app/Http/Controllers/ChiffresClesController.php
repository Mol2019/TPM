<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\GEstion\ChiffresCleGestion;


class ChiffresClesController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new ChiffresClesGestion;
    }
}

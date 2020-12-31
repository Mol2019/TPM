<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Gestion\MenusGestion;



class MenusController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new MenusGestion();
        $this->name = "menus";
    }
}

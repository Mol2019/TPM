<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Gestion\ActeursGestion;
use Illuminate\Support\Collection;


class ActeursController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new ActeursGestion();
        $this->name = "acteurs";
    }

    public function acteurs()
    {
        $data = new Collection;

        $data->acteurs = $this->tg->all();
        $viewer = new SiteController('acteurs');
        return $viewer->viewLoader($data);
    }

    public function execAction(Request $request)
    {   
        return $this->tg->execution($request);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Gestion\DonateursGestion;
use Illuminate\Support\Collection;


class DonateursController extends Controller
{
    //
    public function __construct()
    {
        $this->tg = new DonateursGestion;
        $this->name= "donateurs";
    }

    public function liste()
    {
        $data = new Collection;

        //$data->single = $this->tg->getByParam('type','video');
        $viewer = new SiteController('publications.donateurs');
        return $viewer->viewLoader($data);
    }
}

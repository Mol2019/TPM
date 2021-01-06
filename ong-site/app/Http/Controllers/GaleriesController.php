<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gestion\GaleriesGestion;
use Illuminate\Support\Collection;


class GaleriesController extends BaseController
{
    //

    public function __construct()
    {
        $this->tg = new GaleriesGestion;
        $this->name = "galeries";
    }

    public function phototheque()
    {
        $data = new Collection;

        $data->single = $this->tg->getByParam('type','image');
        $viewer = new SiteController('galeries.phototheque');
        return $viewer->viewLoader($data);
    }

    public function videotheque()
    {
        $data = new Collection;

        $data->single = $this->tg->getByParam('type','video');
        $viewer = new SiteController('galeries.videotheque');
        return $viewer->viewLoader($data);
    }
}

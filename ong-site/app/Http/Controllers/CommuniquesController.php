<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gestion\CommuniquesGestion;
use Illuminate\Support\Collection;


class CommuniquesController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new CommuniquesGestion;
        $this->name = "communiques";
    }

    public function communiques()
    {
        $data = new Collection;

        $data->news = $this->tg->all();
        $viewer = new SiteController('actualites.communiques');
        return $viewer->viewLoader($data);
    }
}

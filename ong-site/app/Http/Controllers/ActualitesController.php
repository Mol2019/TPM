<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Gestion\ActualitesGestion;
use Illuminate\Support\Collection;


class ActualitesController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new ActualitesGestion();
        $this->name = "actualites";
    }

    public function execution(Request $request)
    {
        return $this->tg->execAction($request);
    }

    public function actualitesDetails($slug)
    {
        $data = new Collection;

        $data->single = $this->tg->getByParam('slug',$slug,1)[0];
        $viewer = new SiteController('actualites.actualites-details');
        return $viewer->viewLoader($data);
    }

    public function news()
    {
        $data = new Collection;

        $data->news = $this->tg->getByParam('is_new',true);
        $viewer = new SiteController('actualites.news');
        return $viewer->viewLoader($data);
    }

    public function agenda()
    {
        $data = new Collection;

        $data->news = $this->tg->getByParam('is_new',true);
        $viewer = new SiteController('actualites.agenda');
        return $viewer->viewLoader($data);
    }
}

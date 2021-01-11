<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Gestion\JobnewsGestion;
use Illuminate\Support\Collection;


class JobnewsController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new JobnewsGestion;
        $this->name ="jobnews";
    }

    public function liste()
    {
        $data = new Collection;

        $data->news = $this->tg->all();
        $viewer = new SiteController('actualites.jnews');
        return $viewer->viewLoader($data);
    }
}

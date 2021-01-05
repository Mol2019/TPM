<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use App\Gestion\MenusGestion;
use Illuminate\Support\Collection;



class MenusController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new MenusGestion();
        $this->name = "menus";
    }

    public function menuDetails($title)
    {
        $data = new Collection;

        $data->single = $this->tg->getByParam('title',$title,1)[0] ?? NULL ;
        $viewer = new SiteController('menu.menu-details');
        if($data->single):
            return $viewer->viewLoader($data);
        endif;
        return back();    
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Collection;
use App\Gestion\ActualitesGestion;



class SiteController extends Controller
{
    protected $name = "";

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function viewLoader($collection)
    {
        $data = new Collection;
        $act = new ActualitesGestion;
        $data->flashs = $act->getByParam('is_flash',true,2);
        $data->donnees = $collection;
        return view('site.'.$this->name,compact('data'));
    }
}

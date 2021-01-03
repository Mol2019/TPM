<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Gestion\PublicationsGestion;

class PublicationsController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new PublicationsGestion;
        $this->name = "publications";
    }
}

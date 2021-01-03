<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Gestion\JobnewsGestion;

class JobnewsController extends BaseController
{
    //
    public function __construct()
    {
        $this->tg = new JobnewsGestion;
        $this->name ="jobnews";
    }
}

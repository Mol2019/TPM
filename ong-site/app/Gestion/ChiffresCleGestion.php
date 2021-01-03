<?php

namespace App\Gestion;
use App\Models\ChiffreCle;
use App\Gestion\TreatmentGestion;

class ChiffreClesGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new ChiffreCle;
    $this->rules = [
      "title" => "required|min:2",
      "content" => "required",
      "image" => "required",
      "slug" => "required",
    ];
  }

  /*protected function create(Request $request){

  }*/
}

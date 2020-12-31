<?php

namespace App\Gestion;
use App\Models\Actualite;
use App\Gestion\TreatmentGestion;

class ActualitesGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Actualite;
    $this->rules = [
      "title" => "required|min:2",
      "content" => "required",
      "slug" => "required",
      "image" => "required"
    ];
  }

  /*protected function create(Request $request){

  }*/
}

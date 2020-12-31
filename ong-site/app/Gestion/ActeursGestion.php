<?php

namespace App\Gestion;
use App\Models\Actualite;
use App\Gestion\TreatmentGestion;

class ActeursGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Actualite;
    $this->rules = [
      "description" => "required|min:2",
      "libelle" => "required",
      "image" => "required",
    ];
  }

  /*protected function create(Request $request){

  }*/
}

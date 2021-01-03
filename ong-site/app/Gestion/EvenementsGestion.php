<?php

namespace App\Gestion;
use App\Models\Evenement;
use App\Gestion\TreatmentGestion;

class EvenementsGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Evenement;
    $this->rules = [
      "nom" => "required|min:2",
    ];
  }

  /*protected function create(Request $request){

  }*/
}

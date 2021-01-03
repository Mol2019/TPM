<?php

namespace App\Gestion;
use App\Models\Equipe;
use App\Gestion\TreatmentGestion;

class EquipesGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Equipe;
    $this->rules = [
      "nom" => "required|min:2",
    ];
  }

  /*protected function create(Request $request){

  }*/
}

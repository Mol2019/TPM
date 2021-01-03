<?php

namespace App\Gestion;
use App\Models\Membre;
use App\Gestion\TreatmentGestion;

class MembresGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Membre;
    $this->rules = [
      "nom" => "required|min:2",
    ];
  }

  /*protected function create(Request $request){

  }*/
}

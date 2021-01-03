<?php

namespace App\Gestion;
use App\Models\Donateur;
use App\Gestion\TreatmentGestion;

class DonateursGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Donateur;
    $this->rules = [
      "nom" => "required|min:2",
    ];
  }

  /*protected function create(Request $request){

  }*/
}

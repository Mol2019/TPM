<?php

namespace App\Gestion;
use App\Models\Partenaire;
use App\Gestion\TreatmentGestion;

class PartenairesGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Partenaire;
    $this->rules = [
      "nom" => "required|min:2",
    ];
  }

  /*protected function create(Request $request){

  }*/
}

<?php

namespace App\Gestion;
use App\Models\ChiffreCle;
use App\Gestion\TreatmentGestion;

class ChiffresClesGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new ChiffreCle;
    $this->rules = [
      "libelle" => "required|min:2",
      "valeur" => "required|min:0",
    ];
  }

  /*protected function create(Request $request){

  }*/
}

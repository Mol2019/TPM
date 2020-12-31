<?php

namespace App\Gestion;
use App\Models\Type;
use App\Gestion\TreatmentGestion;

class TypesGestion extends TreatmentGestion
{
  public function __construct()
  {
    $this->model = new Type;
    $this->rules = [
      "nom" => "required|min:2"
    ];
  }
}

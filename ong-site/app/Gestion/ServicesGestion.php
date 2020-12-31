<?php

namespace App\Gestion;
use App\Models\Service;
use App\Gestion\TreatmentGestion;

class ServicesGestion extends TreatmentGestion
{
  public function __construct()
  {
    $this->model = new Service;
    $this->rules = [
      "nom" => "required|min:2",
      "access_key" => "required|min:6",
    ];
  }
}

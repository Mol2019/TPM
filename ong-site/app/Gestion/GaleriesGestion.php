<?php

namespace App\Gestion;
use App\Models\Galerie;
use App\Gestion\TreatmentGestion;

class GaleriesGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Galerie;
    $this->rules = [
      "label" => "required|min:2",
      "slug" => "required|min:2",
      "image" => "required|image",
      "content" => "required"
    ];
  }

}

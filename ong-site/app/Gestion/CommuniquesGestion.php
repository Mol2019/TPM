<?php

namespace App\Gestion;
use App\Models\Communique;
use App\Gestion\TreatmentGestion;

class CommuniquesGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Communique;
    $this->rules = [
      "label" => "required|min:2",
      "slug" => "required|min:2",
      "image" => "required|image",
      "content" => "required"
    ];
  }

}

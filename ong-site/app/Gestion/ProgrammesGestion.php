<?php

namespace App\Gestion;
use App\Models\Programme;
use App\Gestion\TreatmentGestion;

class ProgrammesGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Programme;
    $this->rules = [
      "label" => "required|min:2",
      "slug" => "required|min:2",
      "content" => "required"
    ];
  }

}

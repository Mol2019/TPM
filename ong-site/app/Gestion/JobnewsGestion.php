<?php

namespace App\Gestion;
use App\Models\Jobnew;
use App\Gestion\TreatmentGestion;

class JobnewsGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Jobnew;
    $this->rules = [
      "label" => "required|min:2",
      "slug" => "required|min:2",
      "image" => "required|image",
      "content" => "required"
    ];
  }

}

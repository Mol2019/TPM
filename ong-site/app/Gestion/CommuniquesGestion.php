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
      "title" => "required|min:2",
      "image" => "required|image",
      "content" => "required"
    ];
    $reflection = new \ReflectionClass($this->model);
    $this->name = $reflection->getShortName();
  }

}

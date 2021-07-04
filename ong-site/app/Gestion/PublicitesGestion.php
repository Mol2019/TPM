<?php

namespace App\Gestion;
use App\Models\Publicite;
use App\Gestion\TreatmentGestion;

class PublicitesGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Publicite;
    $this->rules = [
      "title" => "required|min:2",
      "content" => "required"
    ];
  }

}

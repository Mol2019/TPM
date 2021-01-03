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
      "label" => "required|min:2",
      "slug" => "required|min:2",
      "image" => "required|image",
      "content" => "required"
    ];
  }

}

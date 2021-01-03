<?php

namespace App\Gestion;
use App\Models\Publication;
use App\Gestion\TreatmentGestion;

class PublicationsGestion extends TreatmentGestion
{
  public function __construct()
  {
    $this->model = new Publication;
    $this->rules = [
      "title" => "required|min:2",
      "slug" => "required|min:2",
      "image" => "required|image",
      "content" => "required"
    ];
  }

}

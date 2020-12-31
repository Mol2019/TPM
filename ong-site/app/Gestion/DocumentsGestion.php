<?php

namespace App\Gestion;
use App\Models\Document;
use App\Gestion\TreatmentGestion;

class DocumentsGestion extends TreatmentGestion
{
  public function __construct()
  {
    $this->model = new Document;
    $this->rules = [
      "nom" => "required|min:2"
    ];
  }
}

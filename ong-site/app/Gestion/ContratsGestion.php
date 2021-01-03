<?php

namespace App\Gestion;
use App\Models\Contrat;
use App\Gestion\TreatmentGestion;

class ContratsGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Contrat;
    $this->rules = [
      "title" => "required|min:2",
      "content" => "required",
      "image" => "required",
      "slug" => "required",
    ];
  }

  /*protected function create(Request $request){

  }*/
}

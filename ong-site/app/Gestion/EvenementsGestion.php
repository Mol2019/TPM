<?php

namespace App\Gestion;
use App\Models\Evenement;
use App\Gestion\TreatmentGestion;

class EvenementsGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Evenement;
    $this->rules = [
      "title" => "required|min:2",
      "content" => "required",
      "date_debut" => "required|date_format:Y-m-d|after_or_equal:today",
      "date_end" => "required|date_format:Y-m-d|after_or_equal:date_debut",
    ];
  }

  /*protected function create(Request $request){

  }*/
}

<?php

namespace App\Gestion;
use App\Models\Agenda;
use App\Gestion\TreatmentGestion;

class AgendasGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Agenda;
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

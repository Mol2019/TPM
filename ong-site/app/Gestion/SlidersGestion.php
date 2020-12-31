<?php

namespace App\Gestion;
use App\Models\Slider;
use App\Gestion\TreatmentGestion;

class SlidersGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Slider;
    $this->rules = [
      "title" => "required|min:2",
      "content" => "required",
      "slug" => "required",
      "image" => "required|image"
    ];
  }

  /*protected function create(Request $request){

  }*/
}

<?php

namespace App\Gestion;
use App\Models\Menu;
use App\Gestion\TreatmentGestion;

class MenusGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Menu;
    $this->rules = [
      "title" => "required|min:2",
      "content" => "required",
    ];
    $reflection = new \ReflectionClass($this->model);
    $this->name = $reflection->getShortName();
  }

  /*protected function create(Request $request){

  }*/


}

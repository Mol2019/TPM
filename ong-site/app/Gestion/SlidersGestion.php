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

  public function execution($data)
  {
    $model = $this->model::find($data['id']);
    if($model->is_online) :
      $model->is_online = false;  
    else : 
      $model->is_online = true;
    endif;
    $model->save();
    $message = $data['name']." mis à jour avec succès";
    return response()->json(["success" => true,"message" => $message],201);

  }
}

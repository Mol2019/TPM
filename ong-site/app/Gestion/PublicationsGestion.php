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

  public function execution($data)
  {
    $model = $this->model::find($data['id']);
    if($model->is_online) :
      $model->is_online = false;  
    else : 
      $model->is_online = true;
    endif;

    if($data['action'] == "normal")
    {
      $model->is_rapport = false;
      $model->is_press = false;
    }
    if($data['action'] == "inPress")
    {
      $model->is_rapport = false;
      $model->is_press = true;
    }
    if($data['action'] == "report")
    {
      $model->is_rapport = true;
      $model->is_press = false;
    }

    $model->save();
    $message = $data['name']." mis à jour avec succès";
    return response()->json(["success" => true,"message" => $message],201);
  }

}

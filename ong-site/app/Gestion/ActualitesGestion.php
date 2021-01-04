<?php

namespace App\Gestion;
use App\Models\Actualite;
use App\Gestion\TreatmentGestion;

class ActualitesGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Actualite;
    $this->rules = [
      "title" => "required|min:2",
      "content" => "required",
    ];
  }

  public function execAction($data)
  {
    switch ($data['action']) {
      case 'older': $model = $this->model::find($data['id']);
                    $model->is_new = false;
                    $model->save();
                    $message = $data['name']." mis à jour avec succès";
                    return response()->json(["success" => true,"message" => $message],201); 
      case 'flash': $model = $this->model::find($data['id']);
                    if($model->is_flash) : 
                      $model->is_flash = false;
                    else :
                      $model->is_flash = true;
                    endif;
                    $model->save();
                    $message = $data['name']." mis à jour avec succès";
                    return response()->json(["success" => true,"message" => $message],201);
      default: break;
    }
  }
}

<?php

namespace App\Gestion;
use App\Models\Acteur;
use App\Gestion\TreatmentGestion;
use File;

class ActeursGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Acteur;
    $this->rules = [
      "description" => "required|min:2",
      "libelle" => "required",
      "image" => "required",
    ];
  }

  public function create($data,$file=NULL)
  {
    $errors = $this->checkRules($this->rules,$data);
    if(count($errors) > 0 ){
      return ["result" => false,"data" => $errors];
    }else{
      if($file){
        if($file->isValid()) :
          File::makeDirectory("assets/site/images/$this->name", $mode = 0777, true, true);
          $extension = $file->getClientOriginalExtension();
          $data['image'] = "assets/site/images/$this->name/$data[libelle].".$extension;
          $file->move("assets/site/images/$this->name", $data['image']);
        endif;
      }
      $this->createOrUpdate($data);
    }
    return ["result" => true,"data" => $data];
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

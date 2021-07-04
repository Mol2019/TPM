<?php

namespace App\Gestion;
use App\Models\Galerie;
use App\Gestion\TreatmentGestion;
use File;

class GaleriesGestion extends TreatmentGestion
{
  public function __construct()
  {
  $this->model = new Galerie;
    $this->rules = [
      "title" => "required|min:2",
      "slug" => "required|min:2",
      "image" => "required|image",
      "content" => "required"
    ];
    $reflection = new \ReflectionClass($this->model);
    $this->name = $reflection->getShortName();
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
          $data['image'] = "assets/site/images/$this->name/$data[title].".$extension;
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

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
      "title" => "required|min:2|unique:menus",
      "content" => "required",
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
          $data['image'] = str_replace(" ","_","assets/site/images/$this->name/$data[title].").$extension;
         
          $file->move("assets/site/images/$this->name", $data['image']);
        endif;
      }
      $this->createOrUpdate($data);
    }
    return ["result" => true,"data" => $data];
  }


  /**
    * check rules
    * @method for check rules before insertion
    * @param array $rules - rules for check if data are valids
    * @param array $value - data to check
    * @return Collection - errors get
    * @return string - succefuly message
    */
  public function update($data,$id,$file=NULL)
  {
    $this->rules["title"] = "required|min:2";
    $errors = $this->checkRules($this->rules,$data);
    $file = $data["image"] ?? NULL; 
    if($errors->count() > 0 ){
      return ["result" => false,"data" => $errors];
    }else{
      unset($data['hidden_id']);
      if($file){
        if($file->isValid()) :
          File::makeDirectory("assets/site/images/$this->name", $mode = 0777, true, true);
          $extension = $file->getClientOriginalExtension();
          $data['image'] = str_replace(" ","_","assets/site/images/$this->name/$data[title].").$extension;
          $file->move("assets/site/images/$this->name", $data['image']);
        endif;
      }
      $modTitle = $this->model::find($id)->title; 
      if($modTitle == "Mot du président" || $modTitle == "Vision" || $modTitle == "Valeurs" || $modTitle == "Missions" || $data['title'] == "Histoire"){
        $data["title"] = $this->model::find($id)->title;
      }
      $this->createOrUpdate($data,$id);
    }
    return ["result" => true,"data" => $data];

  }

}

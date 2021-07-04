<?php

namespace App\Gestion;
use App\Models\Partenaire;
use App\Gestion\TreatmentGestion;
use File;

class PartenairesGestion extends TreatmentGestion
{
  public function __construct()
  {
   $this->model = new Partenaire;
    $this->rules = [
      "nom" => "required|min:2",
    ];
    $reflection = new \ReflectionClass($this->model);
    $this->name = $reflection->getShortName();
  }

  public function create($data,$file=NULL)
  {
    $errors = $this->checkRules($this->rules,$data);
    $file = $data["logo"];
    if(count($errors) > 0 ){
      return ["result" => false,"data" => $errors];
    }else{
      if($file){
        if($file->isValid()) :
          File::makeDirectory("assets/site/images/$this->name", $mode = 0777, true, true);
          $extension = $file->getClientOriginalExtension();
          $data['logo'] = str_replace(" ","_","assets/site/images/$this->name/$data[nom].").$extension;
         
          $file->move("assets/site/images/$this->name", $data['logo']);
        endif;
      }
      $this->createOrUpdate($data);
    }
    return ["result" => true,"data" => $data];
  }


  public function generateSlug()
  {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    if($this->model::where('slug',$pass)->get()->count() > 0) :
      return self::generateSlug();
    endif;
    return implode($pass);
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
    $errors = $this->checkRules($this->rules,$data);
    $file = $data["logo"] ?? NULL; 
    if($errors->count() > 0 ){
      return ["result" => false,"data" => $errors];
    }else{
      unset($data['hidden_id']);

      if($file){
        if($file->isValid()) :
          File::makeDirectory("assets/site/images/$this->name", $mode = 0777, true, true);
          $extension = $file->getClientOriginalExtension();
          $data['logo'] = str_replace(" ","_","assets/site/images/$this->name/$data[nom].").$extension;
          $file->move("assets/site/images/$this->name", $data['logo']);
        endif;
      }
      $this->createOrUpdate($data,$id);
    }
    return ["result" => true,"data" => $data];

  }
}

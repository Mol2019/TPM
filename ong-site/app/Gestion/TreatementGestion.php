<?php

namespace App\Gestion;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use App\Gestion\TransactionGestion;
use File;

class TreatmentGestion extends TransactionGestion
{
  public function all()
  {
    return $this->getData("liste");
  }

  public function one($id)
  {
    return $this->getData("one",$id);
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
          if($data['logo'])
            $data['logo'] = "assets/site/images/$this->name/$data[nom].".$extension;  
          $file->move("assets/site/images/$this->name", $data['image']);
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
    if($errors->count() > 0 ){
      return ["result" => false,"data" => $errors];
    }else{
      unset($data['hidden_id']);
      if($file){
        if($file->isValid()) :
          File::makeDirectory("assets/site/images/$this->name", $mode = 0777, true, true);
          $extension = $file->getClientOriginalExtension();
          $data['image'] = "assets/site/images/$this->name/$data[title].".$extension;
          if($data['logo'])
            $data['logo'] = "assets/site/images/$this->name/$data[nom].".$extension;
          $file->move("assets/site/images/$this->name", $data['image']);
        endif;
      }
      $this->createOrUpdate($data,$id);
    }
    return ["result" => true,"data" => $data];

  }

  public function delete($type,$id){
    $result = self::destroy($type,$id);
    return ["result" =>$result["result"]];
  }

  /**
    * check rules
    * @method for check rules before insertion
    * @param array $rules - rules for check if data are valids
    * @param array $value - data to check
    * @return Collection - errors get
    */
    protected function checkRules($rules,$values)
    {
       $errors = new Collection;
       $data = Validator::make($values,$rules);
       if($data->fails()) :
         $errors = $data->errors();
       endif;
       return $errors;
     }
}

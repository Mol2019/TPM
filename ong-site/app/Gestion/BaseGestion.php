<?php

namespace App\Gestion;

use App\Gestion\BaseGestionInterface;
use Illuminate\Support\Collection;
/*
 * La base des gestion pour l etraitement des données
 */
class BaseGestion implements BaseGestionInterface
{
  protected $model;
  protected $rules;

  public function __construct($model)
  {
    $this->model = $model;
  }

  /**
  * Method for save data in database
  * @param ($data : array)
  * @return boolean
  */
  protected function save($data)
  {
    if($data) :
      $this->model::firstOrCreate($data);
      return true;
    endif;
    return false;
  }

  /**
   * Method for update existing data in database
   * @param data : array - data to insert in database
   * @return boolean
  */
  protected function update($data,$id)
  {
      $data1 = $this->model::find($id);
      if($data && $data1):
        $data1->update($data);
        return true;
      endif;
      return false;
  }

  /**
   * get all model data in database
   * @return Collection
   */
  protected function getAll($limit=NULL)
  {
    $data = new Collection();
    if($limit) :
       $data = $this->formatedModelArray($this->model::latest()->take($limit)->get());
     else:
      $data =  $this->formatedModelArray($this->model::latest()->get());
    endif;
    return $data;
  }

  /**
   * get one model data
   * @param $id for get single data
   * @return Model
   */
  protected function getOne($id)
  {
    return $this->formatedModel($this->model::find($id));
  }

  /**
   * get one model data
   * @param $param-title and param-value for get single data
   * @return Collection of Model
   */
  public function getByParam($title,$value,$limit=NULL)
  {
    $data = new Collection();
    if($limit):
      $data = $this->formatedModelArray($this->model::where($title,$value)->latest()->take($limit)->get());
    else :
      $data = $this->formatedModelArray($this->model::where($title,$value)->latest()->get());
    endif;
    return $data;
  }

  /**
  * @method delete for delete data in database
  * @param string $type type of delete you want
  * @param int $id the id of the data to delete
  * @return array contain the result of the query
  */
  protected function destroy($type,$id)
  {
      $data = $this->model::find($id);
      $result = false;
      if($type == "soft") :
        $data->delete();
        $result = true;
      else :
        $data->forceDelete();
        $result = true;
      endif;
      return ["result" => $result];
  }

  protected function formatedModel($model)
  {
    return $model;
  }

  protected function formatedModelArray($arrayModel)
  {
    $i =0;
    foreach($arrayModel as $model):
      $arrayModel[$i] = $this->formatedModel($model);
      $i++;
    endforeach;
    return $arrayModel;
  }
}

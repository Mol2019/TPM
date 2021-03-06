<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
//use App\Gestion\TreatmentGestion;
use File;

class BaseController extends Controller
{
    protected $view = "app";
    protected $name;
    protected $model;
    protected $tg;
    protected $ur;
    protected $data;

    /**
     * @method constructor
     * @param App\Model
     * @param string $name
    */
    public function __construct($tg,$name)
    {
      //$this->tg = new TreatmentGestion;
      $this->ur = Auth::user()->role;
      $this->view .= $this->ur ?? "su";
      $this->view .= ".content.$name";
    }

    public function index()
    {
      $data = $this->tg->getData("liste");
      return view($this->view.".content.$this->name",compact('data'));
    }

    public function create(Request $request)
    {
      $toInsert = $request->all();
      $file = NULL;
      if($request->file('image')):
        $file = $request->file('image');
      endif;
      if($request->slug):
        $toInsert['slug'] = $this->tg->generateSlug();
      endif;
      if($request->is_flash ):
        $toInsert['is_flash'] = true;
      endif;
      $data = $this->tg->create($toInsert,$file ?? NULL);
      $message = $data["result"] ? $this->name." enregistré avec succès" : "";
      return response()->json(["success" => $data["result"],"message" => $message,"response_data" => $data['data']],201);
    }


    public function update(Request $request)
    {
      $data = $this->tg->update($request->all(),$request->hidden_id);
      $message = $data["result"] ? $this->name." mis à jour avec succès" : "";
      return response()->json(["success" => $data["result"],"message" => $message,"response_data" => $data['data']],201);
    }

    public function edit($id)
    {

      $data = $this->tg->one($id);
      return response()->json(["success" => $data["result"],"response_data" => $data],201);
    }

    public function delete($id)
    {
      $data = $this->tg->delete("force",$id);
      return response()->json(["success" => $data["result"],'message' => "Supprimé avec succès"],201);
    }

    public function execAction(Request $request)
    {
      return $this->tg->execution($request);
    }

}

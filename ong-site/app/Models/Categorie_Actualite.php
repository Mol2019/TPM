<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie_Actualite extends Model
{
    use HasFactory;
    protected $fillable = ["categorie_id","actualite_id"];

    public function actualite()
    {
      return $this->belongsTo("App\Models\Actualite");
    }

    public function categorie()
    {
      return $this->belongsTo("App\Models\Categorie");
    }
}

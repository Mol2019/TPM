<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categorie extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = ["label","description"];

    public function actualite()
    {
      return $this->belongsToMany("App\Models\CategorieActualite","categorie_actualite","actualite_id");
    }
}

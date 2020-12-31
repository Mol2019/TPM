<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Actualite extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["title","content","slug","image","is_flash","is_new"];

    public function categorie()
    {
      return $this->belongsToMany("App\Models\CategorieActualite","categorie_actualite","categorie_id");
    }
}

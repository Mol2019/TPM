<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiffreCle extends Model
{
    use HasFactory;
    protected $table = "chiffres_cles";

    protected $fillable = ["libelle","description","valeur","image","statut"];
}

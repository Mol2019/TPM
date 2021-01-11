<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    use HasFactory;

    protected $fillable = ["nom","sigle","logo","site_url","facebook","twitter","email","linkdln","contact","whatsapp","telegram","is_online"];

}

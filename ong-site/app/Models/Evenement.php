<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;
    protected $fillable = ['title','content','slug','image','is_online',"date_debut","date_end","is_abort","is_urgent"];
}

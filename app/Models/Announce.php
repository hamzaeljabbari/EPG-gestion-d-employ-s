<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    use HasFactory;
    protected $fillable = [
        'poste',
        'nom_entreprise',
        'délais',
        'description',
        'site',
        'admin_id'
    ];
}

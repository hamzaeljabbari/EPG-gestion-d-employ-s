<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announce2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'poste2',
        'délais2',
        'description2',
        'user_id'
    ];
}

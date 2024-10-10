<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armas extends Model
{
    use HasFactory;

    protected $table = 'armas';

    protected $fillable = [
        'tipo',
        'modelo',
        'condicion'
    ];
}

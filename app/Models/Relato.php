<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relato extends Model
{
    use HasFactory;
     protected $table = 'relatos';

    protected $fillable = [
        'id',
        'texto',


    ];
}
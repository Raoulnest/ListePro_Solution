<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsables_responsables extends Model
{
    use HasFactory;
     protected $table = 'responsables_responsables';
    protected $fillable = [
        'nom',
        'codeIn',
    ];
}

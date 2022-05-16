<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsables extends Model
{
    use HasFactory;
    protected $table = 'responsables';
    protected $fillable = [
        'nom',
        'codeIn',
    ];
}

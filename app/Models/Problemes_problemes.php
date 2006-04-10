<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problemes_problemes extends Model
{
    use HasFactory;
    protected $table = 'problemes_problemes';
    protected $fillable = [
        'description',
        'solution_id',
        'types_id',
    ];
}

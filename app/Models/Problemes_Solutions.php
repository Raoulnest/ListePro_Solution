<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problemes_Solutions extends Model
{
    use HasFactory;
    protected $table = 'problemes_Solutions';
    protected $fillable = [
        'solution_id',
        'probleme_id',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solutions_solutions extends Model
{
    use HasFactory;
    protected $table = 'solutions_solutions';
    protected $fillable = [
        'description',
        'agent_id',
        'types_id',
    ];
}

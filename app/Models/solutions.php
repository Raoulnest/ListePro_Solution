<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solutions extends Model
{
    use HasFactory;
    protected $table = 'solutions';
    protected $fillable = [
        'description',
        'agent_id',
        'types_id',
    ];
}

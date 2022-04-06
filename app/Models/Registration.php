<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'gender',
        'address',
        'religion',
        'from_jhs',
        'major',
        'created_at',
        'update_at',
    ];
}

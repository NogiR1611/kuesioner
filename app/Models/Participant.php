<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;
    protected $table = 'participants';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nim',
        'nama',
        'gender',
        'semester'
    ];

    
}

<?php

namespace App\StudentDetail;

use Illuminate\Database\Eloquent\Model;

class StudentDetail extends Model
{
    protected $fillable = [
        'registration_number', 'roll_number', 'class', 'stream', 'subject', 'std_code' 
    ];
}

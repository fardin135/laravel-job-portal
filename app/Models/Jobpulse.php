<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobpulse extends Model
{
    use HasFactory;
    protected $table = 'jobpulses';
    public $timestamps = true;
}

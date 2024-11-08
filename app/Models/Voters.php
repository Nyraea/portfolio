<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voters extends Model
{
    use HasFactory;

    protected $table = 'voters';

    protected $fillable = [
        'maVoterID',
        'maVoterName',
        'maDateOfBirth',
        'maGender',
        'maContactnumber',
    ];

    public $timestamps = false;
}

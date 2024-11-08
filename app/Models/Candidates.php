<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidates extends Model
{
    use HasFactory;

    protected $table = 'candidates';

    protected $fillable = [
        'dsCandidateID',
        'dsCandidateName',
        'dsPartyAffiliation',
        'dsElectionPosition',
    ];

public $timestamps = false;
}

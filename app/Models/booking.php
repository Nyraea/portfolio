<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'booking';

    protected $fillable = [
        'maFirstname',
        'maLastname',
        'maEmail',
        'maContactnumber',
        'maAddress',
        'maCheckInDate',
        'maRoom',
        'maDays',
        'maPax',
        'maSpecialRequest',
        'maTotalPrice',
        'maRoomPrice'

    ];

    public $timestamps = false;
}

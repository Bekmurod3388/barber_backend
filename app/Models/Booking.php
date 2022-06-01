<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_name',
        'client_phone_number',
        'barber_id',
        'day',
        'start_time',
    ];

    public function barberbooking(){
        return $this->belongsTo(Barber::class,'barber_id');
    }
}

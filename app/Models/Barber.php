<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    use HasFactory;
    protected $fillable = [
        'barber_name',
        'barber_phone_number',
        'barber_home_adress',
        'passport_number',
        'barber_photo',
        'start_time',
        'end_time',
    ];

    public function  barberservices(){
        return $this->hasMany(Services::class);
    }
    public function  barberbooking(){
        return $this->hasMany(Booking::class);
    }
}

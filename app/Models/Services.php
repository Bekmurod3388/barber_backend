<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected  $fillable=['services_name','cost','photo','barber_id'];

    public function  barberservices(){
        return $this->belongsTo(Barber::class,'barber_id');
    }

    public function  Booking(){
        return $this->belongsTo(Booking::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected  $fillable=['services_name','cost','barber_id'];
    public function  Barber(){
        return $this->belongsTo(Barber::class);
    }
    public function  Booking(){
        return $this->belongsTo(Booking::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barber extends Model
{
    use HasFactory;
    protected $table = 'barbers';
    protected $primaryKey = 'id';
    protected $fillable = ['border_name', 'barder_phone_number', 'barder_home_adress', 'passport_number', 'work_time'];
}

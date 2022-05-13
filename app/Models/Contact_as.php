<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_as extends Model
{
    use HasFactory;
    protected $fillable=['phone','address','email','lattitude','longitude'];
}

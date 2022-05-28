<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horoscope_signs extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'Description',
        'Start_Date',
        'End_Date',
    ];
}

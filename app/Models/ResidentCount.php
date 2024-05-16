<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResidentCount extends Model
{
    protected $fillable =['male_count', 'female_count', 'seniorCitizen_count'];
    use HasFactory;
}

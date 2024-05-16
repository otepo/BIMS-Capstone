<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
    protected $fillable = ['residentId', 'firstName', 'middleName', 'lastName', 'position', 'contactNumber'];
    // protected $primaryKey = 'officialNumber';
    use HasFactory;
    public function resident()
    {
        return $this->belongsTo(Resident::class, 'residentId', 'residentId');
    }

}

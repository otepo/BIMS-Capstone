<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resident extends Model
{
    // use HasFactory;
    protected $fillable = ['lastName','firstName','middleName','suffix','dateOfBirth','age','gender','civilStatus','bloodType','highestEducationalAttainment','nationality','houseNumber','streetName','purok','contactNumber', 'contactNumber2','nationality','occupation','monthlyIncome','identification','lengthOfStay','email',
    'password', 'residentId', 'userRole', 'userLevel', 'status', 'voter', 'student'];
    protected $primaryKey = 'residentId';
    // public $incrementing = false;
    public function scopeFilter($query, array $filters) {
        if($filters["search"] ?? false) {
            $query->orwhere("residentId", "like", "%" . request("search") . "%")
                ->orWhere("lastName", "like", "%" . request("search") . "%" )
                ->orWhere("firstName", "like", "%" . request("search") . "%" )
                ->orWhere("middleName", "like", "%" . request("search") . "%" )
                ->orWhere("status", "like", "%" . request("search") . "%" )
                ->orWhere("created_at", "like", "%" . request("search") . "%" );
              // Check if the search term is "senior" or "nonSenior"
              if (strtolower(request('search')) === 'senior') {
                $query->orWhere('seniorCitizen', 'senior');
            } elseif (request('search') === 'nonSenior') {
                $query->orWhere('seniorCitizen', 'nonSenior');
            }
            // Check if the search term is "voter" or "nonVoter"
            if (strtolower(request('search')) === 'voter') {
                $query->orWhere('voter', 'voter');
            } elseif (request('search') === 'nonVoter') {
                $query->orWhere('voter', 'nonVoter');
            }
            // Check if the search term is "student" or "graduate" or "not applicable"
            if (strtolower(request('search')) === 'student') {
                $query->orWhere('student', 'student');
            } elseif (request('search') === 'graduate') {
                $query->orWhere('student', 'graduate');
            }
            // Check if the search term is "employed" or "unEmployed" or "not applicable"
            if (strtolower(request('search')) === 'employed') {
                $query->orWhere('occupation', 'employed');
            } elseif (request('search') === 'unEmployed') {
                $query->orWhere('occupation', 'unEmployed');
            }
            if (strtolower(request('search')) === 'male') {
                $query->orWhere('gender', 'Male');
            } elseif (request('search') === 'female') {
                $query->orWhere('gender', 'Female');
            }
        }
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($resident) {
            $resident->seniorCitizen = ($resident->age > 60) ? 'senior' : 'nonSenior';
        });
        static::updating(function ($resident) {
            $resident->seniorCitizen = ($resident->age > 60) ? 'senior' : 'nonSenior';
        });
    }
 
    protected static function booted()
    {
        static::saving(function ($resident) {
            $resident->updateAge();
        });
    }

    public function updateAge()
{
    $currentDate = Carbon::now();
    $birthdate = Carbon::parse($this->dateOfBirth);

    $this->age = $currentDate->diffInYears($birthdate);
}
public function user()
{
    return $this->hasOne(User::class);
}

public function official()
{
    return $this->hasOne(Official::class);
}

}

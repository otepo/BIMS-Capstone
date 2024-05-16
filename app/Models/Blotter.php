<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blotter extends Model
{
    use HasFactory;
    protected $fillable = ['blotterId', 'complainantAddress', 'complainantFullName', 'complainantNumber', 'complaineeAddress', 'complaineeFullName', 'complaineeNumber', 'incidentDate', 'complaint', 'complaintStatus', 'complaintSubject'];

    protected $primaryKey = 'blotterId';
    public function scopeFilter($query, array $filters) {
        if($filters["search"] ?? false) {
            $query->orwhere("blotterId", "like", "%" . request("search") . "%")
                ->orWhere("complainantFullName", "like", "%" . request("search") . "%" )
                ->orWhere("complaineeFullName", "like", "%" . request("search") . "%" )
                ->orWhere("complaintStatus", "like", "%" . request("search") . "%" )
                ->orWhere("created_at", "like", "%" . request("search") . "%" );
        }
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Blotter;
use App\Models\Resident;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        return view ("adminlinks.dashboard", [
            "residents" => Resident::all(),
            "blotters" => Blotter::all()
            
        ]);
    }


}

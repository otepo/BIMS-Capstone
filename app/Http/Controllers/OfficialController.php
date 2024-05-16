<?php

namespace App\Http\Controllers;

use App\Models\Official;
use Illuminate\Http\Request;

class OfficialController extends Controller
{
    //Show All officials
    public function index() {
        return view('adminlinks.officials.officials', [
            'officials' => Official::all()
        ]);
    }
    
 



 
}

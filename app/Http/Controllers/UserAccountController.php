<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    //GET All user accounts
    public function index(){
        return view('adminlinks.userAccounts', [
            'users' => User::paginate(2)
        ]);
    }
}

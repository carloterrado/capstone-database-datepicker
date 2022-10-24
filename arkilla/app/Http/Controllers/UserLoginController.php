<?php

namespace App\Http\Controllers;

use App\Models\Dates;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    public function index()

    {
    
        return view('renter.renterLogin');
    }
}

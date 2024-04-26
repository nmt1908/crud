<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function listinterests()
    {
        $interests = Interest::all();
        return view('interests', compact('interests'));
    }
}

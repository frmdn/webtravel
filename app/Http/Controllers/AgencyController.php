<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agency;

class AgencyController extends Controller
{
    public function index()
    {
        $data = Agency::get();
        return view('webpage.agency', compact('data'));
    }

    public function show($id)
    {
        $data = Agency::find($id);
        return view('webpage.profile', compact('data'));
    }
}

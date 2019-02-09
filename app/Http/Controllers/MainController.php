<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\City;
use App\Place;


class MainController extends Controller
{
    public function country()
    {
        $data = Country::get();
        return view('webpage.index', compact('data'));
    }

    public function city($country)
    {
        $data = City::where('country_id','=',$country)->get();
        $country = Country::where('kode_country','=',$country)->first();
        return view('webpage.city', compact('data','country'));
    }

    public function place($id)
    {
        $data = Place::where('city_id','=',$id)->get();
        $city = City::find($id);
        return view('webpage.place', compact('data','city'));
    }
}

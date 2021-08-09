<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    //
    public function store()
    {
        $input= \request()->validate([
            'latitude' => ['required', 'string', 'max:255'],
            'longitude' => ['required'],
            'address' => ['required'],
            'user_id' => ['required'],

        ]);
        $location = new Location();
        $location->latitude =$input['latitude'];
        $location->longitude = $input['longitude'];
        $location->address = $input['address'];
        $location->save();

        \session()->flash('createdmessage','Location was Created');
        return redirect()->route('home');
    }

}

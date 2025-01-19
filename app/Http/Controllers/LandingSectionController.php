<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateLandingRequest;
use App\Models\LandingSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LandingSectionController extends Controller
{
    public function show()
    {
        $data = LandingSection::first();
        return view('dashboared.index', compact('data'));
    }

    public function edit()
    {
        $data = LandingSection::first();
        return view('dashboared.landing.edit', compact('data'));
    }

    public function update(UpdateLandingRequest $request, LandingSection $landingSection)
    {
        $data = $request->validated();
        if($request->hasFile('image')) {
            // dd($landingSection->image);
            Storage::delete("public/landing_image/$landingSection->image");
            $image = $request->image;
            $newImgName =  time() . '-' . $image->getClientOriginalName();
            $image->storeAs('landing_image', $newImgName, 'public');
            $data['image'] = $newImgName;
        }
        $landingSection->update($data);
        return to_route('landing.show')->with('landinUpdateStatus', 'Landing is updated Successfully');
    }
}

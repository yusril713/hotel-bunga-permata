<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.about.index', [
            'data' => About::first()
        ]);
    }

    public function edit($id)
    {
        return view('admin.about.edit', [
            'data' => About::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $about->title = $request->title;
        $about->description = $request->description;
        $about->number_of_room = $request->number_of_room;
        $about->number_of_staff = $request->number_of_staff;
        $about->number_of_client = $request->number_of_client;
        $about->save();
        return redirect()->route('abouts.index')->with('status', 'Data succesfully changed');
    }
}

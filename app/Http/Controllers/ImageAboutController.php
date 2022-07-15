<?php

namespace App\Http\Controllers;

use App\Models\ImageAbout;
use Illuminate\Http\Request;

class ImageAboutController extends Controller
{
    public function index()
    {
        return view('admin.about.image.index', [
            'data' => ImageAbout::all()
        ]);
    }

    public function edit($id)
    {
        return view('admin.about.image.edit', [
            'data' => ImageAbout::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $image = ImageAbout::find($id);
        if ($request->hasFile('image')) {
            if (file_exists(storage_path('app/public/' . $image->image))) {
                unlink(storage_path('app/public/about/' . $image->image));
            }
            $file = $request->file('image')->store('about-us', 'public');
            $image->image = $file;
        }
        $image->save();
        return redirect()->route('image-about.index')->with('status', 'Data successfully changed');
    }
}

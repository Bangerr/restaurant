<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    //Return the form to upload
    public function index()
    {
        return view('pages.upload.index');
    }

    //Upload the image to S3
    public function store(Request $request)
    {

        // try {
        //     Storage::disk('s3')->put('test.txt', 'Hello World');
        //     echo "Connection successful";
        // } catch (\Exception $e) {
        //     echo "Connection failed: " . $e->getMessage();
        // }
        // $path = $request->file('image')->store('images', 's3');

        // return $path;

        try {
            $request->validate([
                'title' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if ($request->hasFile('image')) {
                $extension  = request()->file('image')->getClientOriginalExtension(); //This is to get the extension of the image file just uploaded
                $image_name = time() . '_' . $request->title . '.' . $extension;
                $path = $request->file('image')->storeAs(
                    'images',
                    $image_name,
                    's3'
                );
                Image::create([
                    'title' => $request->title,
                    'image' => $path
                ]);
                return redirect()->back()->with([
                    'message' => "Image uploaded successfully",
                ]);
            }
        } catch (\Exception $e) {
            return redirect()->back()->with([
                'error' => "Upload failed: " . $e->getMessage()
            ]);
        }
    }
}

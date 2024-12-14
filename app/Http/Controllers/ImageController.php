<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use App\Models\Dish;

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

        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'instructions' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);


            if ($request->hasFile('image')) {
                //Get the file extension
                $extension  = request()->file('image')->getClientOriginalExtension();

                //Generate a unique name for the image
                $image_name = time() . '_' . $request->title . '.' . $extension;

                //Store the image in the S3
                $path = $request->file('image')->storeAs(
                    'images',
                    $image_name,
                    's3'
                );

                // Get the full URL of the image
                $url = Storage::disk('s3')->url($path);
                //\Log::info('Image URL: ' . $url);
                echo $url;



                //Save the record in the database
                Image::create([
                    'title' => $request->title,
                    'image' => $url
                ]);

                Dish::create([
                    'title' => $request->title,
                    'description' => $request->description,
                    'instructions' => $request->instructions,
                    'image_path' => $url,
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

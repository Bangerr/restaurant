<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class DishController extends Controller
{

    public function index()
    {
        return view('pages.dishes.index', [
            'dishes' => Dish::all()
        ]);
    }

    // public function store(Request $request)
    // {

    //     try {
    //         $request->validate([
    //             'title' => 'required',
    //             'description' => 'required',
    //             'instructions' => 'required',
    //             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         ]);


    //         if ($request->hasFile('image')) {
    //             //Get the file extension
    //             $extension  = request()->file('image')->getClientOriginalExtension();

    //             //Generate a unique name for the image
    //             $image_name = time() . '_' . $request->title . '.' . $extension;

    //             //Store the image in the S3
    //             $path = $request->file('image')->storeAs(
    //                 'images',
    //                 $image_name,
    //                 's3'
    //             );

    //             // Get the full URL of the image
    //             $url = Storage::disk('s3')->url($path);
    //             \Log::info('Image URL: ' . $url);
    //             echo $url;



    //             //Save the record in the database
    //             Image::create([
    //                 'title' => $request->title,
    //                 'image' => $path
    //             ]);

    //             $dish = new Dish();
    //             $dish->title = $request->title;
    //             $dish->description = $request->description;
    //             $dish->instructions = $request->instructions;
    //             $dish->image_path = $url;
    //             $dish->create();
    //             $dish->save();


    //             return redirect()->back()->with([
    //                 'message' => "Image uploaded successfully",
    //             ]);
    //         }
    //     } catch (\Exception $e) {
    //         return redirect()->back()->with([
    //             'error' => "Upload failed: " . $e->getMessage()
    //         ]);
    //     }
    // }

    /*
    * Show the Dynamic DishId
    * @params $dishId
    * @return $dishId
    */

    public function showDish($dishId)
    {
        try {

            $dish = Dish::findOrFail($dishId); // Using findOrFail for better error handling

            // Note: changed from 'index' to 'show'
            return view('pages.dishes.show', [
                'dish' => $dish
            ]);
        } catch (\Exception $e) {
            // Log ther error
            \Log::error('Dish error: ' . $e->getMessage());
            throw $e;
        }
    }
}

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

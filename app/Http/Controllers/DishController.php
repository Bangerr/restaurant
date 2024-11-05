<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class DishController extends Controller
{

    public function index()
    {

        // $dishes = Dish::paginate(6);

        // return view('pages.home.index', [
        //     'dishes' => $dishes,
        // ]);

        // $dish = new Dish([
        //     'title' => "test1",
        // ]);
        // $dish->save();

        $dish = new Dish();
        $dish->title = "test2";
        $dish->description = "test2";
        $dish->instructions = "test2";
        $dish->image_path = "test2";
        $dish->save();

        var_dump(Dish::all());

        return view('pages.dishes.index', [
            'dishes' => Dish::all()
        ]);
    }

    public function __invoke()
    {
        $dishes = Dish::paginate(6);
        return view('pages.dishes.index', compact('dishes'));
    }

    /*
    * Show the Dynamic DishId
    * @params $dishId
    * @return $dishId
    */

    public function showDish($dishId)
    {
        return $dishId;
        //dd($dishId);
    }
}

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

        $dish = new Dish();
        $dish->title = "test1";
        $dish->description = "test";
        $dish->instructions = "test1";
        $dish->image_path = "test";
        $dish->create();

        return view('pages.dishes.index');
    }

    public function __invoke()
    {
        $dishes = Dish::paginate(6);
        return view('pages.dishes.index', compact('dishes'));
    }
}

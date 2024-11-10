<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class DishController extends Controller
{

    public function index()
    {

        // $dish = new Dish();
        // $dish->title = "Wiener Schnitzel";
        // $dish->description = "Das Wiener Schnitzel wird traditionell mit Kalbfleisch gemacht. Das Wiener Schnitzel ist ein mit Mehl, dann geschlagenem Ei und Semmelbrösel paniertes Kalbsschnitzel (Kalbsschlögel). Es wird traditionell in Schweineschmalz goldgelb herausgebacken und mit einer Zitronenspalte oder Zitronenhälfte serviert.";
        // $dish->instructions = "Zuerst die Schnitzel zwischen Frischhaltefolie behutsam klopfen. Fleisch nun beidseitig salzen, in Mehl wenden, abklopfen, durch die Eier ziehen und in den Bröseln wenden.";
        // $dish->image_path = "test2";
        // $dish->save();

        // //var_dump(Dish::all());

        // return view('pages.dishes.index', [
        //     'dishes' => Dish::all()
        // ]);

        return view('pages.dishes.index', [
            'dishes' => Dish::all()
        ]);
    }

    // public function __invoke()
    // {
    //     $dishes = Dish::paginate(6);
    //     return view('pages.dishes.index', compact('dishes'));
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

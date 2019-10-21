<?php

namespace App\Http\Controllers;

use App\filters\MenuFilter;
use App\filters\RestaurantFilter;
use App\Menu;
use App\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index(RestaurantFilter $filter)
    {
        $restaurants = Restaurant::filter($filter , [])->with(['contact'])->get();
        return  api()
                ->data('restaurants' , $restaurants )
                ->build();

    }

    public function menu(Restaurant $restaurant , MenuFilter $filter)
    {
        $menus = Menu::filter($filter , [
            'restaurant_id' => $restaurant->id
        ])->paginate(30);

        return  api()
            ->data('menus' , $menus )
            ->data('restaurant' , $restaurant )
            ->build();
    }
}

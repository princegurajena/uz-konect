<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function view(Menu $menu)
    {
        $menu->load(['restaurant']);
        return api()->data('menu' , $menu)->build();
    }
}

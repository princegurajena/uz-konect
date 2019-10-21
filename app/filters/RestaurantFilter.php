<?php


namespace App\filters;


use App\filters\core\ModelFilter;

class RestaurantFilter extends ModelFilter
{
    protected  $equal = [
        'id'
    ];
    protected  $dates = [];
    protected  $range = [];
    protected  $sort = [
        'id'
    ];

    protected  $filters = [
    ];

}

<?php


namespace App\filters;


use App\filters\core\ModelFilter;

class MenuFilter extends ModelFilter
{

    protected  $equal = [
        'id',
        'restaurant_id'
    ];
    protected  $dates = [];
    protected  $range = [];
    protected  $sort = [
        'id'
    ];

    protected  $filters = [
    ];

}

<?php


use App\core\ApiResponse;

if (!function_exists('api'))
{
    function api(){
        return new ApiResponse();
    }
}

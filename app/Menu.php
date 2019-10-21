<?php

namespace App;

use App\filters\core\HasModelFilter;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasModelFilter;
    public function restaurant(){
       return $this->hasOne(Restaurant::class , 'id' , 'restaurant_id');
    }
}

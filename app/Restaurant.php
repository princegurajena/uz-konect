<?php

namespace App;

use App\filters\core\HasModelFilter;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed id
 */
class Restaurant extends Model
{
    use HasModelFilter;
    public function contact()
    {
        return $this->morphOne(ContactDetail::class,'contact_details');
    }
}

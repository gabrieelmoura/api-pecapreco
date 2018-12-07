<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    public function partsAndWorkshops()
    {
        return $this->hasMany(PartAndWorkshop::class);
    }
}

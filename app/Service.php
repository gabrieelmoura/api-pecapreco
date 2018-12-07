<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function servicesAndWorkshops()
    {
        return $this->hasMany(ServiceAndWorkshop::class);
    }
}

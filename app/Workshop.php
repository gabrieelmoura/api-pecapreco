<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    public function userAndWorkshop()
    {
        return $this->hasMany(UserAndWorkshop::class);
    }

    public function partAndWorkshop()
    {
        return $this->hasMany(PartAndWorkshop::class);
    }

    public function serviceAndWorkshop()
    {
        return $this->hasMany(ServiceAndWorkshop::class);
    }
}

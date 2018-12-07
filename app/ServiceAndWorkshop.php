<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceAndWorkshop extends Model
{
    protected $table = "services_workshops";

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }
}

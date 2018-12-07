<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartAndWorkshop extends Model
{
    protected $table = "parts_workshops";

    public function part()
    {
        return $this->belongsTo(Part::class);
    }

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }
}

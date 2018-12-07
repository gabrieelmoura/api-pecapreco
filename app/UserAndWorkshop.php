<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAndWorkshop extends Model
{
    protected $table = "users_workshops";

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }
}

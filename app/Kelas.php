<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{

    protected $table = 'classes';
    protected $guarded = [];

    public function member()
    {
        return $this->hasMany('App\Member','foreign_key');
    }
}


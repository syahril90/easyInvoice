<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $table = 'item';

    public $timestamps = false;

    public function Invoice()
    {
        return $this->belongsTo('App\Invoice');
    }
}

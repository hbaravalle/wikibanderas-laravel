<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continente extends Model
{
    protected $table = 'continentes';
    protected $guarded = [];
    public $timestamps = false;

    public function paises() {
        return $this->hasMany('App\Pais', 'continente_id');
    }
}

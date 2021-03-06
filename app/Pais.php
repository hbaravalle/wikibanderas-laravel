<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'paises';
    protected $guarded = [];
    public $timestamps = false;

    public function continente() {
        return $this->belongsTo('App\Continente', 'continente_id');
    }
}

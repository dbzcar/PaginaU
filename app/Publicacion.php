<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Publicacion extends Model
{
    protected $table = 'publicaciones';

    public function categoria() //$post->category->name
    {
        return $this->belongsTo(Categoria::class);
    }
}

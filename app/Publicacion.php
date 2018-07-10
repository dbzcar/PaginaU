<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Publicacion extends Model
{
    protected $table = 'publicaciones';

    protected $guarded = [];
    protected $dates = ['publicado_el'];

    public function categoria() //$post->category->name
    {
        return $this->belongsTo(Categoria::class);
    }

    public function scopePublished($query)
    {
        $query->whereNotNull('publicado_el')
                    ->where('publicado_el', '<=', Carbon::now())
                    ->latest('publicado_el');
    }
}

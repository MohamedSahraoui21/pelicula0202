<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'color'];

    //relacion n:m con peliculas
    public function peliculas()
    {
        return $this->belongsToMany(Pelicula::class);
    }

    //accesores y muttators
    public function nombre(): Attribute
    {
        return Attribute::make(
            set: fn ($v) => strtolower($v),
            get: fn ($v) => "#" . $v

        );
    }
}

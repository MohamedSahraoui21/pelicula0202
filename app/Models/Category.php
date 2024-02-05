<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['nombre'];

    //relacion 1:N CON peliculas
    public function peliculas(): HasMany
    {
        return $this->hasMany(Pelicula::class);
    }

    //Accesores y muttadores
    public function nombre(): Attribute
    {
        return Attribute::make(
            set: fn ($v) => ucfirst($v),
        );
    }
}

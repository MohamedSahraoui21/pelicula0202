<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pelicula extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'caratula', 'category_id', 'sinopsis', 'disponible'];

    //relacion 1:n con categories
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }


    //relacion m:m con etiqutas
    public function etiquetas(): BelongsToMany
    {
        return $this->belongsToMany(Etiqueta::class);
    }

    //accsores y muttattors
    public function nombre(): Attribute
    {
        return  Attribute::make(
            set: fn ($v) => ucwords($v),
        );
    }
    public function sinopsis(): Attribute
    {
        return  Attribute::make(
            set: fn ($v) => ucwords($v),
        );
    }
}

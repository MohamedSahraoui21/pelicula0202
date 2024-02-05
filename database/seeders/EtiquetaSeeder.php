<?php

namespace Database\Seeders;

use App\Models\Etiqueta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'infantil' => '#E57373',
            'accion' => '#EC407A',
            'aventura' => '#D50000',
            'animada' => '#673AB7',
            'batallas' => '#283593',
            'laravel' => '#009688',
        ];
        foreach ($tags as $nombre => $color) {
            Etiqueta::create(compact('nombre', 'color'));
        }
    }
}

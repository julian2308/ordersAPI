<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Srt;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = [
            [
                'nombre' => "Tacos al Pastor",
                'descripcion' => "Tacos de cerdo marinado con piña, cilantro y cebolla",
                'imagen' => "https://www.seriouseats.com/thmb/4kbwN13BlZnZ3EywrtG2AzCKuYs=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/20210712-tacos-al-pastor-melissa-hom-seriouseats-37-f72cdd02c9574bceb1eef1c8a23b76ed.jpg",
                'categoria' => "Entrada",
                'precio' => "30",
            ],
            [
                'nombre' => "Guacamole Fresco",
                'descripcion' => "Aguacate, tomate, cebolla y cilantro mezclados a la perfección",
                'imagen' => "https://popmenucloud.com/cdn-cgi/image/width%3D1200%2Cheight%3D1200%2Cfit%3Dscale-down%2Cformat%3Dauto%2Cquality%3D60/yqmbhkup/599761a3-e1d9-4dd3-84f1-85d91f18a552.jpg",
                'categoria' => "Entrada",
                'precio' => "20",

            ],
            [
                'nombre' => "Churros con Chocolate",
                'descripcion' => "Deliciosos churros acompañados de una rica salsa de chocolate",
                'imagen' => "https://img-global.cpcdn.com/recipes/9c4293e90850b9b5/400x400cq70/photo.jpg",
                'categoria' => "Postre",
                'precio' => "40",

            ],
            [
                'nombre'=> "Flan de Cajeta",
                'descripcion'=> "Postre tradicional mexicano con cajeta y crema",
                'imagen' => "https://images-gmi-pmc.edge-generalmills.com/0cd9a242-0720-4f98-b46c-e47843b5cfea.jpg",
                'categoria' => "Postre",
                'precio' => "20",

            ],
            [
                'nombre'=> "Tamales de Pollo",
                'descripcion'=> "Maíz relleno de pollo sazonado y cocido al vapor",
                'imagen' => "https://enmicasa.com/wp-content/uploads/2013/01/tamales-de-pollo.jpg",
                'categoria' => "Principal",
                'precio' => "110",

            ],
            [
                'nombre'=> "Enchiladas Verdes",
                'descripcion'=> "Tortillas rellenas de pollo cubiertas con salsa verde y queso",
                'imagen' => "https://editorialtelevisa.brightspotcdn.com/wp-content/uploads/2019/05/enchiladas-verdes.png",
                'categoria' => "Principal",
                'precio' => "120",

            ],
            [
                'nombre'=> "Mole Poblano",
                'descripcion'=> "Pollo con salsa de mole poblano, una mezcla de chiles y chocolate",
                'imagen' => "https://www.seriouseats.com/thmb/TOQrlZhSHX6NwXXOT7vAIY7pMLY=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/__opt__aboutcom__coeus__resources__content_migration__serious_eats__seriouseats.com__recipes__images__2012__10__20121024-227412-mole-poblano-8aa343f2cb384508834ed888a4b65df2.jpg",              
                'categoria' => "Principal",
                'precio' => "140",

            ],
            [
                'nombre'=> "Horchata Fresca",
                'descripcion'=> "Bebida refrescante de arroz con canela y vainilla",
                'imagen' => "https://adanmedrano.com/wp-content/uploads/2017/11/Horchata_de_arroz-1.jpg",
                'categoria' => "Bebida",
                'precio' => "30",

            ],
            [
                'nombre'=> "Agua de Jamaica",
                'descripcion'=> "Refrescante bebida de flor de jamaica con azúcar y limón",
                'imagen' => "https://static.tuasaude.com/media/article/np/ml/agua-de-jamaica-para-bajar-de-peso_16565_l.jpg",
                'categoria' => "Bebida",
                'precio' => "20",

            ],
        ];

        DB::table('productos')->insert($productos);
    }
}

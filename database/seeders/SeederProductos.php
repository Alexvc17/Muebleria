<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SeederProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    // -----------------------    Categoria 1 Sala ---------------

        DB::table('productos')->insert([

            'id' => 1001,
            'nombreProducto' => 'Sofá Vittoria', 
            'cantidadProducto' => 11,
            'precioProducto' => 1157000,
            'fotoProducto' => 's1.jpg',
            'descripcionProducto' => 'El sofá Vittoria es moderno y elegante, brinda una comodidad extrema gracias a sus acolchados cojines que se encuentran en el asiento y espaldar del sofá. Ideal para complementar la sala o cualquier otro ambiente de tu hogar.',
            'Color' => 'Cosmic Late',
            'categoria' => 1,
    ]);

    DB::table('productos')->insert([

        'id' => 1002,
        'nombreProducto' => 'Sofá Anderson', 
        'cantidadProducto' => 5,
        'precioProducto' => 1334000,
        'fotoProducto' => 's2.jpg',
        'descripcionProducto' => 'El Sofá Anderson es cómodo y elegante con su diseño moderno da un toque distintivo a tu sala brindando grandes momentos en familia y amigos. Al combinarse con los muebles ideales permite hacer la combinación perfecta para tu hogar.',
        'Color' => 'Bolena Azul',
        'categoria' => 1,
]);

DB::table('productos')->insert([

    'id' => 1003,
    'nombreProducto' => 'Sofá Vitorino', 
    'cantidadProducto' => 7,
    'precioProducto' => 1574000,
    'fotoProducto' => 's3.jpg',
    'descripcionProducto' => 'El Sofá Torino es cómodo y elegante, con su diseño moderno da un toque distintivo a tu sala brindando grandes momentos en familia y amigos. Al combinarse con los muebles ideales permite hacer la combinación perfecta para tu hogar',
    'Color' => 'Cosmic Chocolate',
    'categoria' => 1,
]);


DB::table('productos')->insert([

    'id' => 1004,
'nombreProducto' => 'Mesa de noche Atenea', 
'cantidadProducto' => 11,
'precioProducto' => 574000,
'fotoProducto' => 'ms1.jpg',
'descripcionProducto' => 'La mesa de noche Atenea con amplia capacidad de almacenamiento, cuenta con tres cajones ideales para organizar tus elementos personales. Su diseño contemporáneo le da un toque de estilo y elegancia a tu habitación.',
'Color' => 'Natural con Blanco',
'categoria' => 1,
]);

DB::table('productos')->insert([

    'id' => 1005,
'nombreProducto' => 'Mesa de Noche Bento Nogal Francés', 
'cantidadProducto' => 9,
'precioProducto' => 616000,
'fotoProducto' => 'ms2.jpg',
'descripcionProducto' => 'Mesa de noche con amplia capacidad de almacenamiento, combinado cajones y división abierta; correderas full extensión de apertura push que facilitan el acceso al fondo del cajón. Combina lo tradicional de la madera con la elegancia de sus apliques metálicos en acabado bronce envejecido.',
'Color' => 'Nogal Francés',
'categoria' => 1,
]);

// -----------------------    Categoria 2 Comedor ---------------

DB::table('productos')->insert([

    'id' => 1006,
    'nombreProducto' => 'Comedor Hanna Trento', 
    'cantidadProducto' => 12,
    'precioProducto' => 2663000,
    'fotoProducto' => 'c1.jpg',
    'descripcionProducto' => 'Mesa: 1 mesa Hanna 73 cm de alto, 120 cm de largo y 90 cm de profundidad, tapa fabricada en sustrato laminado  de 31 mm, recubiertos con chapilla de madera, acabado sellador y laca,
    4 sillas de 44 cm de largo, 90 cm de alto y 54 cm de ancho',
    'Color' => 'Bolena Chocolate',
    'categoria' => 2,

]);

DB::table('productos')->insert([

    'id' => 1007,
    'nombreProducto' => 'Comedor Camelia', 
    'cantidadProducto' => 8,
    'precioProducto' => 2232000,
    'fotoProducto' => 'c2.jpg',
    'descripcionProducto' => 'Mesa: 1 mesa de comedor Camelia de 75 cm de alto, 150 cm de largo y 90 cm de profundo, ecubierta con chapilla de madera, chambrana, soporte y patas elaboradas en madera maciza, acabado tintilla, sellado y lacado. 
    Sillas: 4 Sillas Camelia de 86 cm de alto, 47 cm de largo y 55 cm de profundo',
    'Color' => 'Bolena Gris',
    'categoria' => 2,

]);

DB::table('productos')->insert([

    'id' => 1008,
    'nombreProducto' => 'Mesa de Noche Bento Nogal Francés', 
    'cantidadProducto' => 9,
    'precioProducto' => 616000,
    'fotoProducto' => 'mc1.jpg',
    'descripcionProducto' => 'Alto: 75 cm | Largo: 150 cm | Profundo: 90 cm

    Cuerpo: 1 cuerpo fabricado con sustratos de MDF 19 mm.
    
    Tapa: 1 tapa fabricada con sustratos de MDF 19 mm recubierta con chapilla de madera',
    
    'Color' => 'Nogal Francés',
    'categoria' => 2,

]);

DB::table('productos')->insert([

    'id' => 1009,
    'nombreProducto' => 'Silla de Comedor Dallas', 
    'cantidadProducto' => 18,
    'precioProducto' => 944000,
    'fotoProducto' => 'sc1.jpg',
    'descripcionProducto' => 'La silla Dallas diseñada ergonómicamente, pensada para tu comodidad y postura manifestando una sutil geométrica de forma lineal en su espaldar y su partes inferiores mostrando un toque de elegancia.

    Medidas:  Alto: 100 cm | Largo: 48 cm | Profundo: 51 cm',
    'Color' => 'Bolena Azul',
    'categoria' => 2,

]);


// -----------------------    Categoria 3 Estudio ---------------

DB::table('productos')->insert([

    'id' => 1010,
    'nombreProducto' => 'Escritorio Verona Natural con Blanco', 
    'cantidadProducto' => 18,
    'precioProducto' => 797000,
    'fotoProducto' => 'e1.jpg',
    'descripcionProducto' => 'Escritorio con diseño moderno, se caracteriza por su geometría irregular con inclinaciones en la tapa, costado y soporte sobre el que descansa el cuerpo de almacenamiento, su aspecto flotante da un equilibrio visual en su composición ideal para armonizar tus espacios de estudio.',
    'Color' => 'Natural con Blanco',
    'categoria' => 3,

]);

DB::table('productos')->insert([

    'id' => 1011,
    'nombreProducto' => 'Escritorio Porto', 
    'cantidadProducto' => 9,
    'precioProducto' => 827000,
    'fotoProducto' => 'e2.jpg',
    'descripcionProducto' => 'El escritorio Porto está conformado por composiciones rectangulares en su estética, diseñado para brindarte comodidad y practicidad, es ideal para para los ambientes de estudio en tu hogar.',
    'Color' => 'Nogal Francés',
    'categoria' => 3,

]);

DB::table('productos')->insert([

    'id' => 1012,
    'nombreProducto' => 'Silla Calgary', 
    'cantidadProducto' => 12,
    'precioProducto' => 439000,
    'fotoProducto' => 'se1.jpg',
    'descripcionProducto' => 'Las formas curvilíneas y las inclinaciones perfectamente pensadas en el confort, la funcionalidad y la ergonomía, hacen que la silla Calgary cuente con un diseño sutil y elegante. Combina el textil y la madera, a través del tapizado con la estructura de las patas y el espaldar, teniendo armonía entre sí. Ideal para complementar diferentes espacios en el hogar.',
    'Color' => 'Bolena Negro',
    'categoria' => 3,

]);

DB::table('productos')->insert([

    'id' => 1013,
    'nombreProducto' => 'Biblioteca Graus', 
    'cantidadProducto' => 5,
    'precioProducto' => 767000,
    'fotoProducto' => 'be1.jpg',
    'descripcionProducto' => 'La biblioteca Graus posee un llamativo diseño modular que brinda un aspecto y geometría sencilla pensando en la funcionalidad y la estética del producto. Ideal para almacenar elementos dentro del ambiente de estudio.',
    'Color' => 'Natural',
    'categoria' => 3,

]);


// -----------------------    Categoria 4 Dormitorio ---------------

DB::table('productos')->insert([

    'id' => 1014,
    'nombreProducto' => 'Colchón Ortholife Plus Fiber Foam', 
    'cantidadProducto' => 12,
    'precioProducto' => 669000,
    'fotoProducto' => 'co1.jpg',
    'descripcionProducto' => 'Colchón ortopédico, apoyo firme

    Estructura interna en Fiber Foam, que garantizan calidad y resistencia del producto. Acolchados en poliuretanos flexibles de alta densidad, que permiten mayor durabilidad y comodidad. Lámina de casatta en una cara que brinda mayor soporte de peso y una firmeza superior. Doble sensación de Confort; una cara apoyo medio / una cara apoyo firme. Acolchados en poliuretanos flexibles de alta densidad, que permiten mayor durabilidad y comodidad.',
    'Color' => 'Blanco',
    'categoria' => 4,

]);


DB::table('productos')->insert([

    'id' => 1015,
    'nombreProducto' => 'Cama Tokio', 
    'cantidadProducto' => 8,
    'precioProducto' => 919000,
    'fotoProducto' => 'ca1.jpg',
    'descripcionProducto' => 'Cama Tokio con diseño contemporáneo y un estilo con acabado elegante y moderno. Los apliques acanalados en los costados del cabecero realzan su estética ideales para combinar con los demás muebles de la línea Tokio.',
    'Color' => 'Nogal Francés',
    'categoria' => 4,

]);
DB::table('productos')->insert([

    'id' => 1016,
    'nombreProducto' => 'Cama Dotti', 
    'cantidadProducto' => 10,
    'precioProducto' => 1079000,
    'fotoProducto' => 'ca2.jpg',
    'descripcionProducto' => 'Cabecero 1 cabecero conformado por una estructura en sustrato de MDF de 31 mm cubierto en chapilla de madera t acabado tintillado, sellado y lacado. Aplique de cabecero elaborado en MDF de 4 mm crudo con acabado en pintura color blanco UV.',
    'Color' => 'Natural con Blanco',
    'categoria' => 4,

]);



DB::table('productos')->insert([

    'id' => 1017,
    'nombreProducto' => 'Mesa de Noche Blech', 
    'cantidadProducto' => 11,
    'precioProducto' => 359000,
    'fotoProducto' => 'mn1.jpg',
    'descripcionProducto' => 'Ficha Técnica 49 x 50 x 49 con Cajón

    Medidas: Alto: 49 cm | Largo: 50 cm | Profundo: 40 cm
    
    Estructura: Cuerpo y cajón elaborado en sustrato lamiando de 15 mm, fondo de cajón y espaldar en 5 mm todo  enchapado con chapilla de madera roble americano  acabado tintilla para el negro, sellador y laca poro abierto mate.',
    'Color' => 'Natural',
    'categoria' => 4,

]);


//Fin
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Servicio;
use Carbon\Carbon;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $servicios = [
            [
                'categoria' => 'OSMOSIS INVERSA',
                'nombre_servicio' => 'OSMOSIS INVERSA',
                'descripcion_servicio' => 'La revisión de una bomba comienza con el desmonte del motor, permitiendo el acceso a los componentes internos. Se realiza una inspección minuciosa de cada parte, incluyendo bujes, impulsores, tazones y flecha.',
                'imagen_servicio' => 'MANTENIMIENTO_MOTO_BOMBA/osmosis_portada.jpeg',
                'fecha_actualizacion' => Carbon::createFromFormat('d/m/Y H:i', '13/06/2024 00:08')
            ],
            [
                'categoria' => 'OSMOSIS INVERSA',
                'nombre_servicio' => 'MANTENIMIENTO A BOMBA',
                'descripcion_servicio' => 'Es importante que se examine la bomba y sus componentes, como el cable de alimentación y las conexiones eléctricas, en busca de daños, corrosión o desgaste.',
                'imagen_servicio' => 'MANTENIMIENTO_BOMBA/bomba_portada.jpeg',
                'fecha_actualizacion' => Carbon::createFromFormat('d/m/Y H:i', '13/06/2024 00:08')
            ],
            [
                'categoria' => 'OSMOSIS INVERSA',
                'nombre_servicio' => 'MANTENIMIENTO A VALVULA DE 3 CUERPO ACERO INOX.',
                'descripcion_servicio' => 'El mantenimiento de válvulas de 3 cuerpos de acero inoxidable incluye la aplicación de anticorrosivo a todos los componentes para evitar posibles oxidaciones futuras.',
                'imagen_servicio' => 'MANTENIMIENTO_VALVULA_3_CUERPO/portada_valvula.jpeg',
                'fecha_actualizacion' => Carbon::createFromFormat('d/m/Y H:i', '13/06/2024 00:08')
            ],
            [
                'categoria' => 'OSMOSIS INVERSA',
                'nombre_servicio' => 'REVISIÓN Y DIÁGNOSTICO DE MEMBRANA EN ÓSMOSIS',
                'descripcion_servicio' => 'El mantenimiento de la membrana en sistemas de ósmosis inversa consiste en sacar la membrana del recipiente de presión, inspeccionar las juntas tóricas, pesarlas para verificar si están saturadas, revisar el conector tapa membrana y realizar una limpieza química.',
                'imagen_servicio' => 'REVISION_DIAGNOSTICO/membrana_portada.jpeg',
                'fecha_actualizacion' => Carbon::createFromFormat('d/m/Y H:i', '13/06/2024 00:08')
            ],
            [
                'categoria' => 'OSMOSIS INVERSA',
                'nombre_servicio' => 'CAMBIO DE SELLO MÉCANICO A BOMBA XT',
                'descripcion_servicio' => 'El cambio de sello mecánico en la bomba XT consiste en desacoplar el coplin, retirar el sello mecánico y luego instalar uno nuevo. Se inspecciona la flecha para asegurar que no haya desgaste y se revisa el cuerpo de la bomba donde se aloja el sello. ¡Asegura un funcionamiento óptimo con un cambio de sello mecánico profesional!',
                'imagen_servicio' => 'CAMBIO_SELLO/cambio_sello.jpeg',
                'fecha_actualizacion' => Carbon::createFromFormat('d/m/Y H:i', '13/06/2024 00:08')
            ],
            [
                'categoria' => 'OSMOSIS INVERSA',
                'nombre_servicio' => 'MANTENIMIENTO A MOTOR DE ALTA PRESION',
                'descripcion_servicio' => 'El mantenimiento de un motor de alta presión incluye el cambio de rodamientos frontal y trasero, limpieza de la bobina con solvente eléctrico, aplicación de barniz de impregnación, prueba de resistencia de la bobina e inspección de las terminales eléctricas.',
                'imagen_servicio' => 'MANTENIMIENTO_ALTA_PRESION/mantenimiento_alta_presion_portada.jpeg',
                'fecha_actualizacion' => Carbon::createFromFormat('d/m/Y H:i', '13/06/2024 00:08')
            ],
            [
                'categoria' => 'OSMOSIS INVERSA',
                'nombre_servicio' => 'MANTENIMIENTO PREVENTIVO A BOMBA DE ALTA PRESION FEDCO',
                'descripcion_servicio' => 'El mantenimiento preventivo de la bomba de alta presión Fedco es esencial para su rendimiento óptimo. Incluye la minuciosa revisión de los componentes internos como bujes, tazones, difusores y el eje rotativo. Nos aseguramos de que no haya desajustes ni daños por fricción o desgaste debido a la corrosión de metales.',
                'imagen_servicio' => 'MANTENIMIENTO_PREVENTIVO_BOMBA_FEDCO/mantenimiento_preventivo_fedco_portada.jfif',
                'fecha_actualizacion' => Carbon::createFromFormat('d/m/Y H:i', '13/06/2024 00:08')
            ],
            [
                'categoria' => 'OSMOSIS INVERSA',
                'nombre_servicio' => 'MANTENIMIENTO PREVENTIVO A TABLEROS ELÉCTRICOS',
                'descripcion_servicio' => 'El mantenimiento preventivo de la bomba de alta presión Fedco es esencial para su rendimiento óptimo. Incluye la minuciosa revisión de los componentes internos como bujes, tazones, difusores y el eje rotativo. Nos aseguramos de que no haya desajustes ni daños por fricción o desgaste debido a la corrosión de metales.',
                'imagen_servicio' => 'MANTENIMIENTO_TABLEROS/tableros_portada.jfif',
                'fecha_actualizacion' => Carbon::createFromFormat('d/m/Y H:i', '13/06/2024 00:08')
            ],
            [
                'categoria' => 'OSMOSIS INVERSA',
                'nombre_servicio' => 'MANTENIMIENTO TABLEROS ELÉCTRICOS',
                'descripcion_servicio' => 'El mantenimiento preventivo de la bomba de alta presión Fedco es esencial para su rendimiento óptimo. Incluye la minuciosa revisión de los componentes internos como bujes, tazones, difusores y el eje rotativo. Nos aseguramos de que no haya desajustes ni daños por fricción o desgaste debido a la corrosión de metales.',
                'imagen_servicio' => 'MANTENIMIENTO_TABLEROS_ELECTRICOS/mantenimiento_tableros_portada.jfif',
                'fecha_actualizacion' => Carbon::createFromFormat('d/m/Y H:i', '13/06/2024 00:08')
            ],
            [
                'categoria' => 'OSMOSIS INVERSA',
                'nombre_servicio' => 'BALANCE DE AGUA',
                'descripcion_servicio' => 'El proceso de ósmosis inversa genera dos corrientes de agua: agua purificada y concentrado. El agua purificada es el agua que ha pasado a través de la membrana y está libre de contaminantes. El concentrado es el agua que contiene los contaminantes que han sido retenidos por la membrana.',
                'imagen_servicio' => 'BALANCE_AGUA/balance_portada.jfif',
                'fecha_actualizacion' => Carbon::createFromFormat('d/m/Y H:i', '13/06/2024 00:08')
            ],
            [
                'categoria' => 'OSMOSIS INVERSA',
                'nombre_servicio' => 'CAMBIO DE FILTROS',
                'descripcion_servicio' => 'La osmosis inversa es un sistema económico y de fácil mantenimiento que garantiza la obtención de agua de máxima calidad para el consumo, así como para otros usos como el riego o la industria. El funcionamiento de un sistema de osmosis inversa se basa en la integración de distintos tipos de filtro, sumados a una membrana filtrante, lo que en conjunto compone un equipo de purificación de agua.',
                'imagen_servicio' => 'CAMBIO_FILTROS/FILTRO_PORTADA.jfif',
                'fecha_actualizacion' => Carbon::createFromFormat('d/m/Y H:i', '13/06/2024 00:08')
            ],
        ];

        foreach ($servicios as $servicio) {
            Servicio::create($servicio);
        }
    }
}

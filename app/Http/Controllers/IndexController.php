<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function inicio()
    {
        $servicios = Servicio::take(6)->get();
        return view('inicio', compact('servicios'));
    }

    public function buscador(Request $request)
    {
        $input = $request->all();

        if ($request->has('buscar_servicio')) {
            $buscarServicio = $input['buscar_servicio'];

            $servicio = Servicio::where('categoria', 'like', '%' . $buscarServicio . '%')->first();

            if ($servicio) {
                switch ($servicio->categoria) {
                    case 'Osmosis Inversa':
                        return redirect()->route('osmosis');
                    case 'Mantenimiento a Motores y Bombas de Agua':
                        return redirect()->route('mantenimiento_MBA');
                    case 'Servicios de Plantas de Aguas Residuales (PTAR)':
                        return redirect()->route('PTAR');
                    case 'Servicio de Torre Desgasificadora':
                        return redirect()->route('desgacificadora');
                    case 'Servicio de mantenimiento de presión constante':
                        return redirect()->route('constante');
                    case 'Mantenimiento a Torre de Enfriamiento':
                        return redirect()->route('enfriamiento');
                    case 'Servicios Eléctricos':
                        return redirect()->route('electricos');
                    case 'Mantenimiento de Piscinas y Balance de Agua':
                        return redirect()->route('piscinas');
                    case 'SERVICIOS DE PURIFICADORAS DE AGUA':
                        return redirect()->route('purificar');
                    case 'Servicios de Mantenimiento y Limpieza':
                        return redirect()->route('limpieza');
                    case 'Otros Servicios':
                        return redirect()->route('otros');
                    default:
                        return redirect()->route('servicios');
                }
            } else {
                // Si no se encuentra el servicio
                return redirect()->route('servicios');
            }
        }
    }

    public function autocomplete(Request $request)
    {
        $data = [];

        if ($request->has('q')) {
            $search = $request->q;
            $data = Servicio::select("categoria")
                ->where("categoria", "like", "%{$search}%")
                ->groupBy("categoria")
                ->limit(5)
                ->get();
        }

        return response()->json($data);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

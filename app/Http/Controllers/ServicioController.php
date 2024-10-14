<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servicios = Servicio::all()->groupBy('categoria');
        return view('servicios', compact('servicios'));
    }

public function servicios() {
        $serviciosAgrupados = Servicio::all()->groupBy('categoria');
        
        $categorias = $serviciosAgrupados->keys();
    
        $categoriasPorPagina = 3;
    
        $paginaActual = request('page', 1);
        $categoriasPaginadas = $categorias->forPage($paginaActual, $categoriasPorPagina)->values();
    
        $serviciosPorCategoria = $serviciosAgrupados->filter(function ($value, $key) use ($categoriasPaginadas) {
            return $categoriasPaginadas->contains($key);
        });
    
        $paginacion = new \Illuminate\Pagination\LengthAwarePaginator(
            $categoriasPaginadas, 
            $categorias->count(), 
            $categoriasPorPagina,
            $paginaActual, 
            ['path' => request()->url(), 'query' => request()->query()]
            );
    
        return view('servicios', compact('serviciosPorCategoria', 'paginacion'));
    }

    public function servicios_osmosis()
    {
        $servicios = Servicio::where('categoria', 'Osmosis Inversa')->get();
        return view('osmosis', compact('servicios'));
    }

    public function mantenimiento_MBA()
    {
        $servicios = Servicio::where('categoria', 'Mantenimiento a Motores y Bombas de Agua')->get();
        return view('mantenimientoMBA', compact('servicios'));
    }
    
    public function ptar()
    {
        $servicios = Servicio::where('categoria', 'Servicios de Plantas de Aguas Residuales (PTAR)')->get();
        return view('ptar', compact('servicios'));
    }

    public function desgacificadora()
    {
        $servicios = Servicio::where('categoria', 'SERVICIO DE TORRE DESGASIFICADORA')->get();
        return view('torre_desgacificadora', compact('servicios'));
    }
    
    public function constante()
    {
        $servicios = Servicio::where('categoria', 'Servicio de mantenimiento de presión constante')->get();
        return view('servicio_mantenimiento', compact('servicios'));
    }
    
    public function enfriamiento()
    {
        $servicios = Servicio::where('categoria', 'Mantenimiento a Torre de Enfriamiento')->get();
        return view('enfriamiento', compact('servicios'));
    }
    
    public function electricos()
    {
        $servicios = Servicio::where('categoria', 'Servicios Eléctricos')->get();
        return view('servicios_electricos', compact('servicios'));
    }
    
    public function piscinas()
    {
        $servicios = Servicio::where('categoria', 'Mantenimiento de Piscinas y Balance de Agua')->get();
        return view('mantenimiento_piscinas', compact('servicios'));
    }
    
    public function purificar()
    {
        $servicios = Servicio::where('categoria', 'SERVICIOS DE PURIFICADORAS DE AGUA')->get();
        return view('purificador_agua', compact('servicios'));
    }

    public function limpieza()
    {
        $servicios = Servicio::where('categoria', 'Servicios de Mantenimiento y Limpieza')->get();
        return view('mantenimiento_limpieza', compact('servicios'));
    }

    public function otros()
    {
        $servicios = Servicio::where('categoria', 'OTROS SERVICIOS')->get();
        return view('otros', compact('servicios'));
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

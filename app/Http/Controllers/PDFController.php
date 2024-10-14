<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Catalogo;

class PDFController extends Controller
{
    public function uploadPDF(Request $request)
    {
        $request->validate([
            'pdf' => 'required|mimes:pdf|max:25480',
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:10240'
        ]);

        $pdfName = time() . '_' . $request->file('pdf')->getClientOriginalName();
        $imageName = time() . '_' . $request->file('image')->getClientOriginalName();

        $pdfPath = $request->file('pdf')->storeAs('public/pdfs', $pdfName);
        $imagePath = $request->file('image')->storeAs('public/images', $imageName);

        Catalogo::create([
            'pdf' => $pdfPath,
            'image' => $imagePath,
        ]);

        return back()->with('success', 'Catálogo subido correctamente');
    }

    public function showPDFs()
    {
        $catalogos = Catalogo::paginate(5);

        return view('catalogos', compact('catalogos'));
    }

    public function managePDFs()
    {
        $catalogos = Catalogo::paginate(5);

        return view('subir-catalogos', compact('catalogos'));
    }

    public function deletePDF($id)
    {
        $catalogo = Catalogo::findOrFail($id);
        Storage::delete($catalogo->pdf);
        Storage::delete($catalogo->image);
        $catalogo->delete();

        return back()->with('success', 'Catálogo eliminado correctamente');
    }

    public function updatePDF(Request $request, $id)
    {
        $catalogo = Catalogo::findOrFail($id);

        if ($request->hasFile('pdf')) {
            Storage::delete($catalogo->pdf);
            $pdfName = time() . '_' . $request->file('pdf')->getClientOriginalName();
            $pdfPath = $request->file('pdf')->storeAs('public/pdfs', $pdfName);
            $catalogo->pdf = $pdfPath;
        }

        if ($request->hasFile('image')) {
            Storage::delete($catalogo->image);
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('public/images', $imageName);
            $catalogo->image = $imagePath;
        }

        $catalogo->save();

        return back()->with('success', 'Catálogo actualizado correctamente');
    }
}

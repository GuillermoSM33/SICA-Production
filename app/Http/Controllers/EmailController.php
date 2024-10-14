<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmailController extends Controller
{
    public function index()
    {
        $emails = DB::table('gmail')->get();
        return view('emails.index', compact('emails'));
    }

    public function create()
    {
        return view('emails.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'gmail' => 'required|email|unique:gmail,gmail|max:250',
        ]);

        DB::table('gmail')->insert([
            'gmail' => $request->gmail,
            'isactive' => 1,
        ]);

        return redirect()->route('emails.index')->with('success', 'Correo agregado con éxito.');
    }

    public function edit($id)
    {
        $email = DB::table('gmail')->where('id', $id)->first();
        return view('emails.edit', compact('email'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'gmail' => 'required|email|max:250|unique:gmail,gmail,'.$id,
            'isactive' => 'required|boolean',
        ]);

        DB::table('gmail')->where('id', $id)->update([
            'gmail' => $request->gmail,
            'isactive' => $request->isactive,
        ]);

        return redirect()->route('emails.index')->with('success', 'Correo actualizado con éxito.');
    }

    public function destroy($id)
    {
        DB::table('gmail')->where('id', $id)->update(['isactive' => 0]);

        return redirect()->route('emails.index')->with('success', 'Correo desactivado con éxito.');
    }
}
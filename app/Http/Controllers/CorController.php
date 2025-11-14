<?php

namespace App\Http\Controllers;

use App\Models\Cor;
use Illuminate\Http\Request;

class CorController extends Controller
{
    /**
     * Retorna todas as cores em JSON
     */
    public function index()
    {
        $cores = Cor::orderBy('descricao')->get();
        return view('cadastros.cores', [
                'cores' => $cores
            ]
        );
    }

    public function fill()
    {
        return view('cadastros.cad-cores');
    }

    /**
     * Cria uma nova cores
     */
    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required|string|max:100'
        ]);

        $cor = Cor::create([
            'descricao' => $request->descricao
        ]);

        $cores = Cor::orderBy('descricao')->get();
        return view('cadastros.cores', [
                'cores' => $cores
            ]
        );
    }

    /**
     * Remove uma cor
     */
    public function destroy($id)
    {
        $cor = Cor::findOrFail($id);
        $cor->delete();

       return redirect()->back();
    }
}

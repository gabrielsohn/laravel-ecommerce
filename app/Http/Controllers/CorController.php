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

    public function edit(int $id)
    {
        $cor = Cor::findOrFail($id);
        return view('cadastros.edit-cores', [
                'cor' => $cor
            ]
        );
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'descricao' => 'required|string|max:100'
        ]);
        
        $cor = Cor::findOrFail($id);

        // Atualiza a propriedade 'cor' no modelo
        $cor->descricao = $request->input('descricao');

        // Salva a alteração no banco de dados
        $cor->save();

        $cores = Cor::orderBy('descricao')->get();
        return view('cadastros.cores', [
                'cores' => $cores
            ]
        );
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

<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Retorna todas as marcas em JSON
     */
    public function index()
    {
        $marcas = Marca::orderBy('descricao')->get();
        return view('cadastros.marcas', [
                'marcas' => $marcas
            ]
        );
    }

    public function edit(int $id)
    {
        $marca = Marca::findOrFail($id);
        return view('cadastros.edit-marcas', [
                'marca' => $marca
            ]
        );
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'descricao' => 'required|string|max:100'
        ]);
        
        $marca = Marca::findOrFail($id);

        // Atualiza a propriedade 'marca' no modelo
        $marca->descricao = $request->input('descricao');

        // Salva a alteração no banco de dados
        $marca->save();

        $marcas = marca::orderBy('descricao')->get();
        return view('cadastros.marcas', [
                'marcas' => $marcas
            ]
        );
    }

     public function fill()
    {
        return view('cadastros.cad-marcas');
    }

    /**
     * Cria uma nova marca
     */
    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required|string|max:100'
        ]);

        $marca = Marca::create([
            'descricao' => $request->descricao
        ]);

        $marcas = Marca::orderBy('descricao')->get();
        return view('cadastros.marcas', [
                'marcas' => $marcas
            ]
        );
    }

    /**
     * Remove uma marca
     */
    public function destroy($id)
    {
        $marca = Marca::findOrFail($id);
        $marca->delete();

       return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Modelo;
use App\Models\Marca; // 👈 importa a Marca
use Illuminate\Http\Request;

class ModeloController extends Controller
{
    /**
     * Lista modelos e marcas para a tela
     */
    public function index()
    {
        $modelos = Modelo::with('marca')
            ->orderBy('descricao')
            ->get();


        return view('cadastros.modelos', [
            'modelos' => $modelos
        ]);
    }

    public function edit(int $id)
    {
        $marcas = Marca::orderBy('descricao')->get();
        $modelo = Modelo::findOrFail($id);
        return view('cadastros.edit-modelos', [
                'marcas'  => $marcas,
                'modelo' => $modelo
            ]
        );
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'descricao' => 'required|string|max:100'
        ]);
        
        $modelo = Modelo::findOrFail($id);

        // Atualiza a propriedade 'marca' no modelo
        $modelo->descricao = $request->input('descricao');

        // Salva a alteração no banco de dados
        $modelo->save();

        $modelos = Modelo::with('marca')
            ->orderBy('descricao')
            ->get();
        return view('cadastros.modelos', [
                'modelos' => $modelos
            ]
        );
    }

     public function fill()
    {
        $marcas = Marca::orderBy('descricao')->get();
        return view('cadastros.cad-modelos', [
            'marcas'  => $marcas
        ]);
    }

    /**
     * Cria um novo modelo
     */
    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required|string|max:100',
            'marca_id'  => 'required|exists:marcas,id', 
        ]);

        $modelo = Modelo::create([
            'descricao' => $request->descricao,
            'marca_id'  => $request->marca_id, 
        ]);

        // já devolve com a relação carregada
        $modelo->load('marca');

        $modelos = Modelo::orderBy('descricao')->get();
        return view('cadastros.modelos', [
                'modelos' => $modelos
            ]
        );
    }

    /**
     * Remove um modelo
     */
    public function destroy($id)
    {
        $modelo = Modelo::findOrFail($id);
        $modelo->delete();

        return redirect()->back();
    }
}

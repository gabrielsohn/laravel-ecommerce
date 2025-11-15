<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use App\Models\Marca;
use App\Models\Modelo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    /**
     * Retorna todas as veiculos em JSON
     */
    public function index()
    {
        $veiculos = Veiculo::orderBy('descricao')->get();
        return view('home.index', [
                'veiculos' => $veiculos
            ]
        );
    }

    public function edit(int $id)
    {
        $marcas = Marca::orderBy('descricao')->get();
        $modelos = Modelo::orderBy('descricao')->get();
        
        $veiculo = Veiculo::findOrFail($id);

        return view('cadastros.edit-veiculos', [
                'marcas'  => $marcas,
                'modelos' => $modelos,
                'veiculo' => $veiculo
            ]
        );
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'descricao' => 'required|string|max:100'
        ]);
        
        $veiculo = Veiculo::findOrFail($id);

        // Atualiza a propriedade 'marca' no modelo
        $veiculo->descricao = $request->input('descricao');
        $veiculo->marca = $request->input('marca');
        $veiculo->modelo = $request->input('modelo');
        $veiculo->quilometragem = $request->input('quilometragem');
        $veiculo->valor = $request->input('valor');
        $veiculo->ano = $request->input('ano');
        $veiculo->foto1 = $request->input('foto1');
        $veiculo->foto2 = $request->input('foto2');
        $veiculo->foto3 = $request->input('foto3');

        // Salva a alteração no banco de dados
        $veiculo->save();

        $veiculos = Veiculo::orderBy('descricao')->get();
        return view('cadastros.veiculos', [
                'veiculos' => $veiculos
            ]
        );
    }

    public function list()
    {
        $veiculos = Veiculo::orderBy('descricao')->get();
        return view('cadastros.veiculos', [
                'veiculos' => $veiculos
            ]
        );
    }

    public function detail($id)
    {
        $veiculo = Veiculo::findOrFail($id);

        return view('detalhes.index', [
                'veiculo' => $veiculo
            ]
        );
    }

     public function fill()
    {
        $marcas = Marca::orderBy('descricao')->get();
        $modelos = Modelo::orderBy('descricao')->get();
        return view('cadastros.cad-veiculos', [
            'marcas'  => $marcas,
            'modelos'  => $modelos
        ]);
    }

    /**
     * Cria uma nova veiculo
     */
    public function store(Request $request)
    {
        $request->validate([
            'descricao' => 'required|string|max:100'
        ]);

        $veiculo = Veiculo::create([
            'descricao' => $request->descricao,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'quilometragem' => $request->quilometragem,
            'valor' => $request->valor,
            'ano' => $request->ano,
            'foto1' => $request->foto1,
            'foto2' => $request->foto2,
            'foto3' => $request->foto3
        ]);

        $veiculos = Veiculo::orderBy('descricao')->get();
        return view('cadastros.veiculos', [
                'veiculos' => $veiculos
            ]
        );
    }

    /**
     * Remove uma veiculo
     */
    public function destroy($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->delete();

       return redirect()->back();
    }
}

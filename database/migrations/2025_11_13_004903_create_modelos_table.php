<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('marca_id');
            $table->string('descricao', 120);
            $table->timestamps();

            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
        });

        // --------------------------------------------------
        // Lista de modelos por marca (iniciais mais comuns)
        // --------------------------------------------------
        $modelos = [
            'Toyota' => ['Corolla', 'Hilux', 'RAV4', 'Yaris', 'Camry'],
            'Volkswagen' => ['Gol', 'Polo', 'T-Cross', 'Nivus', 'Golf'],
            'Mercedes-Benz' => ['Classe A', 'Classe C', 'Classe E', 'GLA', 'GLC'],
            'BMW' => ['Série 1', 'Série 3', 'Série 5', 'X1', 'X3'],
            'Audi' => ['A3', 'A4', 'A6', 'Q3', 'Q5'],
            'Ford' => ['Fiesta', 'Focus', 'Mustang', 'Ranger', 'Bronco'],
            'Chevrolet' => ['Onix', 'Onix Plus', 'S10', 'Tracker', 'Camaro'],
            'Honda' => ['Civic', 'Fit', 'City', 'HR-V', 'CR-V'],
            'Hyundai' => ['HB20', 'Creta', 'Elantra', 'Tucson', 'Santa Fe'],
            'Nissan' => ['Kicks', 'Frontier', 'Versa', 'Sentra', 'Leaf'],
            'Kia' => ['Cerato', 'Sportage', 'Soul', 'Sorento', 'Seltos'],
            'Porsche' => ['911', 'Cayenne', 'Boxster', 'Panamera', 'Macan'],
            'Ferrari' => ['488', 'F8 Tributo', 'Roma', 'Portofino', '812'],
            'Lamborghini' => ['Huracán', 'Aventador', 'Gallardo', 'Urus'],
            'Jaguar' => ['XE', 'XF', 'XJ', 'F-Pace', 'E-Pace'],
            'Land Rover' => ['Discovery', 'Range Rover Evoque', 'Defender', 'Velar'],
            'Volvo' => ['XC40', 'XC60', 'XC90', 'S60', 'V60'],
            'Peugeot' => ['208', '2008', '3008', '308', '5008'],
            'Renault' => ['Kwid', 'Duster', 'Sandero', 'Logan', 'Captur'],
            'Citroën' => ['C3', 'C4 Cactus', 'Aircross', 'Jumpy'],
            'Mazda' => ['Mazda 3', 'Mazda 6', 'CX-3', 'CX-5'],
            'Subaru' => ['Impreza', 'Forester', 'Outback', 'XV'],
            'Mitsubishi' => ['L200 Triton', 'ASX', 'Outlander', 'Pajero'],
            'Jeep' => ['Renegade', 'Compass', 'Wrangler', 'Commander'],
            'Chrysler' => ['300C', 'Pacifica'],
            'Dodge' => ['Charger', 'Challenger', 'Durango'],
            'Ram' => ['Ram 1500', 'Ram 2500'],
            'Tesla' => ['Model S', 'Model 3', 'Model X', 'Model Y'],
            'Suzuki' => ['Jimny', 'Vitara', 'Swift'],
            'Mini' => ['Cooper', 'Countryman'],
            'Fiat' => ['Argo', 'Cronos', 'Toro', '500', 'Pulse'],
            'Alfa Romeo' => ['Giulia', 'Stelvio'],
            'Bentley' => ['Continental GT', 'Bentayga'],
            'Rolls-Royce' => ['Ghost', 'Phantom', 'Cullinan'],
            'Aston Martin' => ['DB11', 'Vantage', 'DBX'],
            'Bugatti' => ['Chiron', 'Veyron'],
            'Maserati' => ['Ghibli', 'Levante', 'Quattroporte'],
            'BYD' => ['Dolphin', 'Song', 'Tang', 'Han'],
            'Chery' => ['Tiggo 5X', 'Tiggo 7', 'Tiggo 8', 'Arrizo 6'],
            'Great Wall' => ['Haval H6', 'Poer']
        ];

        // Buscar IDs das marcas no banco
        $marcas = DB::table('marcas')->pluck('id', 'descricao');

        // Inserir modelos convertendo para FK
        foreach ($modelos as $marcaNome => $listaModelos) {
            if (!isset($marcas[$marcaNome])) continue;

            $marcaId = $marcas[$marcaNome];

            foreach ($listaModelos as $modelo) {
                DB::table('modelos')->insert([
                    'marca_id' => $marcaId,
                    'descricao' => $modelo
                ]);
            }
        }
    }

    public function down()
    {
        Schema::dropIfExists('modelos');
    }
};

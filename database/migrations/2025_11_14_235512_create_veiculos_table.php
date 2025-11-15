<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();

            // Marca e modelo
            $table->string('marca');
            $table->string('modelo');

            // Links das fotos (URLs)
            $table->string('foto1')->nullable();
            $table->string('foto2')->nullable();
            $table->string('foto3')->nullable();

            // Ano, km e valor
            $table->integer('ano');
            $table->integer('quilometragem');
            $table->decimal('valor', 10, 2);

            // Descrição longa
            $table->text('descricao')->nullable();

            $table->timestamps();
        });

        // Carga inicial de dados
        DB::table('veiculos')->insert([

            // ------------------------------------------------------------
            // 2019
            // ------------------------------------------------------------
            [
                'marca'  => 'Jeep',
                'modelo' => 'Compass Longitude 2.0 Diesel 4x4',
                'foto1'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251103/jeep-compass-2.0-16v-diesel-longitude-4x4-automatico-wmimagem13395262410.jpg?s=fill&w=1920&h=1440&q=75',
                'foto2'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251103/jeep-compass-2.0-16v-diesel-longitude-4x4-automatico-wmimagem13395356946.jpg?s=fill&w=1920&h=1440&q=75',
                'foto3'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251103/jeep-compass-2.0-16v-diesel-longitude-4x4-automatico-wmimagem13395447436.jpg?s=fill&w=1920&h=1440&q=75',
                'ano'    => 2019,
                'quilometragem' => 85000,
                'valor'  => 104990.00,
                'descricao' => 'Jeep Compass Longitude Diesel 2019 com tração 4x4, bancos em couro e multimídia completa. Revisões em dia, ótimo SUV para viagens.',
            ],
            [
                'marca'  => 'Jeep',
                'modelo' => 'Compass Limited 2.0 Diesel 4x4',
                'foto1'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251112/jeep-compass-2.0-td350-turbo-diesel-limited-at9-wmimagem01274613836.jpg?s=fill&w=1920&h=1440&q=75',
                'foto2'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251112/jeep-compass-2.0-td350-turbo-diesel-limited-at9-wmimagem01274656317.jpg?s=fill&w=1920&h=1440&q=75',
                'foto3'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251112/jeep-compass-2.0-td350-turbo-diesel-limited-at9-wmimagem01274702847.jpg?s=fill&w=1920&h=1440&q=75',
                'ano'    => 2019,
                'quilometragem' => 62000,
                'valor'  => 119900.00,
                'descricao' => 'Jeep Compass Limited 2019 Diesel. Versão topo com teto solar, ACC e acabamento premium.',
            ],
            [
                'marca'  => 'Mercedes',
                'modelo' => 'C180 Avantgarde 1.6 Turbo',
                'foto1'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251025/mercedesbenz-c-180-1.6-cgi-gasolina-avantgarde-9gtronic-wmimagem09163083437.jpg?s=fill&w=1920&h=1440&q=75',
                'foto2'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251025/mercedesbenz-c-180-1.6-cgi-gasolina-avantgarde-9gtronic-wmimagem09162513781.jpg?s=fill&w=1920&h=1440&q=75',
                'foto3'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251025/mercedesbenz-c-180-1.6-cgi-gasolina-avantgarde-9gtronic-wmimagem09171040939.jpg?s=fill&w=1920&h=1440&q=75',
                'ano'    => 2019,
                'quilometragem' => 45000,
                'valor'  => 169900.00,
                'descricao' => 'Mercedes C180 Avantgarde 2019. Sedã premium com câmbio 9G-Tronic e acabamento superior.',
            ],
            [
                'marca'  => 'Mercedes',
                'modelo' => 'C180 Exclusive 1.6 Turbo',
                'foto1'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251113/mercedesbenz-c-180-1-6-cgi-flex-exclusive-9gtronic-wmimagem20104262267.webp?s=fill&w=1920&h=1440&q=75',
                'foto2'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251113/mercedesbenz-c-180-1-6-cgi-flex-exclusive-9gtronic-wmimagem20104262267.webp?s=fill&w=1920&h=1440&q=75',
                'foto3'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251113/mercedesbenz-c-180-1-6-cgi-flex-exclusive-9gtronic-wmimagem20104397467.webp?s=fill&w=1920&h=1440&q=75',
                'ano'    => 2019,
                'quilometragem' => 38000,
                'valor'  => 179900.00,
                'descricao' => 'Mercedes C180 Exclusive 2019. Versão com acabamento mais luxuoso e pacote de assistência.',
            ],

            // ------------------------------------------------------------
            // 2020
            // ------------------------------------------------------------
            [
                'marca'  => 'Honda',
                'modelo' => 'Civic Sport 2.0 CVT',
                'foto1'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251114/honda-civic-2-0-16v-flexone-sport-4p-cvt-wmimagem03524575413.webp?s=fill&w=1920&h=1440&q=75',
                'foto2'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251114/honda-civic-2-0-16v-flexone-sport-4p-cvt-wmimagem03524591713.webp?s=fill&w=1920&h=1440&q=75',
                'foto3'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251114/honda-civic-2-0-16v-flexone-sport-4p-cvt-wmimagem03524599715.webp?s=fill&w=1920&h=1440&q=75',
                'ano'    => 2020,
                'quilometragem' => 52000,
                'valor'  => 134900.00,
                'descricao' => 'Honda Civic Sport 2020. Visual esportivo, câmbio CVT e excelente consumo.',
            ],
            [
                'marca'  => 'Honda',
                'modelo' => 'Civic Touring 1.5 Turbo',
                'foto1'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251111/honda-civic-1.5-16v-turbo-gasolina-touring-4p-cvt-wmimagem09511266319.jpg?s=fill&w=1920&h=1440&q=75',
                'foto2'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251111/honda-civic-1.5-16v-turbo-gasolina-touring-4p-cvt-wmimagem09511157270.jpg?s=fill&w=1920&h=1440&q=75',
                'foto3'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202511/20251111/honda-civic-1.5-16v-turbo-gasolina-touring-4p-cvt-wmimagem09512568810.jpg?s=fill&w=1920&h=1440&q=75',
                'ano'    => 2020,
                'quilometragem' => 41000,
                'valor'  => 159900.00,
                'descricao' => 'Honda Civic Touring Turbo 2020. Versão topo com motor turbo e pacote completo.',
            ],

            // ------------------------------------------------------------
            // 2021
            // ------------------------------------------------------------
            [
                'marca'  => 'Toyota',
                'modelo' => 'Corolla GLi 2.0 Direct Shift',
                'foto1'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251029/toyota-corolla-2-0-vvtie-flex-gli-direct-shift-wmimagem04233405018.webp?s=fill&w=1920&h=1440&q=75',
                'foto2'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251029/toyota-corolla-2-0-vvtie-flex-gli-direct-shift-wmimagem04233457241.webp?s=fill&w=1920&h=1440&q=75',
                'foto3'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251029/toyota-corolla-2-0-vvtie-flex-gli-direct-shift-wmimagem04233535428.webp?s=fill&w=1920&h=1440&q=75',
                'ano'    => 2021,
                'quilometragem' => 36000,
                'valor'  => 124900.00,
                'descricao' => 'Toyota Corolla GLi 2.0 2021. Confiabilidade e baixo consumo.',
            ],
            [
                'marca'  => 'Toyota',
                'modelo' => 'Corolla XEi 2.0',
                'foto1'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251015/toyota-corolla-2.0-vvtie-flex-xei-direct-shift-wmimagem1335414424.jpg?s=fill&w=1920&h=1440&q=75',
                'foto2'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251015/toyota-corolla-2.0-vvtie-flex-xei-direct-shift-wmimagem1335414424.jpg?s=fill&w=1920&h=1440&q=75',
                'foto3'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251015/toyota-corolla-2.0-vvtie-flex-xei-direct-shift-wmimagem1335414424.jpg?s=fill&w=1920&h=1440&q=75',
                'ano'    => 2021,
                'quilometragem' => 28000,
                'valor'  => 139900.00,
                'descricao' => 'Toyota Corolla XEi 2021. Acabamento superior e mais conforto.',
            ],

            // ------------------------------------------------------------
            // 2022
            // ------------------------------------------------------------
            [
                'marca'  => 'Jeep',
                'modelo' => 'Compass Série S 2.0 Diesel',
                'foto1'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251010/jeep-compass-2-0-td350-turbo-diesel-limited-at9-wmimagem20245392734.webp?s=fill&w=1920&h=1440&q=75',
                'foto2'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251010/jeep-compass-2-0-td350-turbo-diesel-limited-at9-wmimagem20245224323.webp?s=fill&w=1920&h=1440&q=75',
                'foto3'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251010/jeep-compass-2-0-td350-turbo-diesel-limited-at9-wmimagem20245305863.webp?s=fill&w=1920&h=1440&q=75',
                'ano'    => 2022,
                'quilometragem' => 22000,
                'valor'  => 154900.00,
                'descricao' => 'Jeep Compass Série S 2022 Diesel. Pacote tecnológico completo.',
            ],
            [
                'marca'  => 'Toyota',
                'modelo' => 'Corolla Altis 2.0',
                'foto1'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251029/toyota-corolla-2-0-vvtie-flex-altis-direct-shift-wmimagem17185890222.webp?s=fill&w=1920&h=1440&q=75',
                'foto2'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251029/toyota-corolla-2-0-vvtie-flex-altis-direct-shift-wmimagem17185964610.webp?s=fill&w=1920&h=1440&q=75',
                'foto3'  => 'https://image.webmotors.com.br/_fotos/anunciousados/gigante/2025/202510/20251029/toyota-corolla-2-0-vvtie-flex-altis-direct-shift-wmimagem17185981015.webp?s=fill&w=1920&h=1440&q=75',
                'ano'    => 2022,
                'quilometragem' => 18000,
                'valor'  => 149900.00,
                'descricao' => 'Toyota Corolla Altis 2022. Top de linha, muito conforto.',
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veiculos');
    }
};

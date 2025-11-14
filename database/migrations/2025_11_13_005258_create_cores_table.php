<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cores', function (Blueprint $table) {
            $table->id();
            $table->string('descricao', 50)->unique();
            $table->timestamps();
        });

        // Inserção das cores mais comuns (todas únicas)
        DB::table('cores')->insert([
            ['descricao' => 'Branco'],
            ['descricao' => 'Preto'],
            ['descricao' => 'Prata'],
            ['descricao' => 'Cinza'],
            ['descricao' => 'Vermelho'],
            ['descricao' => 'Azul'],
            ['descricao' => 'Verde'],
            ['descricao' => 'Amarelo'],
            ['descricao' => 'Marrom'],
            ['descricao' => 'Bege'],
            ['descricao' => 'Vinho'],
            ['descricao' => 'Laranja'],
            ['descricao' => 'Grafite'],
            ['descricao' => 'Azul Escuro'],
            ['descricao' => 'Azul Claro'],
            ['descricao' => 'Verde Escuro'],
            ['descricao' => 'Prata Escuro'],
            ['descricao' => 'Cinza Chumbo'],
            ['descricao' => 'Champagne'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('cores');
    }
};

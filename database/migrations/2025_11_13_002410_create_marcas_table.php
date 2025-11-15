<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::create('marcas', function (Blueprint $table) {
            $table->id();
            $table->string('descricao', 100);
            $table->timestamps();
        });

        // Inserção das principais marcas de carro do mundo
        DB::table('marcas')->insert([
            ['descricao' => 'Toyota'],
            ['descricao' => 'Volkswagen'],
            ['descricao' => 'Mercedes'],
            ['descricao' => 'BMW'],
            ['descricao' => 'Audi'],
            ['descricao' => 'Ford'],
            ['descricao' => 'Chevrolet'],
            ['descricao' => 'Honda'],
            ['descricao' => 'Hyundai'],
            ['descricao' => 'Nissan'],
            ['descricao' => 'Kia'],
            ['descricao' => 'Porsche'],
            ['descricao' => 'Ferrari'],
            ['descricao' => 'Lamborghini'],
            ['descricao' => 'Jaguar'],
            ['descricao' => 'Land Rover'],
            ['descricao' => 'Volvo'],
            ['descricao' => 'Peugeot'],
            ['descricao' => 'Renault'],
            ['descricao' => 'Citroën'],
            ['descricao' => 'Mazda'],
            ['descricao' => 'Subaru'],
            ['descricao' => 'Mitsubishi'],
            ['descricao' => 'Jeep'],
            ['descricao' => 'Chrysler'],
            ['descricao' => 'Dodge'],
            ['descricao' => 'Ram'],
            ['descricao' => 'Tesla'],
            ['descricao' => 'Suzuki'],
            ['descricao' => 'Mini'],
            ['descricao' => 'Fiat'],
            ['descricao' => 'Alfa Romeo'],
            ['descricao' => 'Bentley'],
            ['descricao' => 'Rolls-Royce'],
            ['descricao' => 'Aston Martin'],
            ['descricao' => 'Bugatti'],
            ['descricao' => 'Maserati'],
            ['descricao' => 'BYD'],
            ['descricao' => 'Chery'],
            ['descricao' => 'Great Wall'],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('marcas');
    }
};

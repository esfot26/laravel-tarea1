<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('transportes',function(Blueprint $table){
            $table->id();
            $table->string('tipo');
            $table->string('matricula')->unique();
            $table->string('combustion');
            $table->string('modelo');
            $table->string('marca');
            $table->string('capacidad');
            $table->timestamps();

            //'tipo','matricula','combustion','modelo','marca','capacidad' 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

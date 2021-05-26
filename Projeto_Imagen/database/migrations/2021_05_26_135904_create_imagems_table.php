<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero', 9);
            $table->string('nome', 50);
            $table->string('assunto', 80);
            $table->string('complemento', 80);
            $table->string('mes', 3);
            $table->string('ano', 4);
            $table->integer('pagina');
            $table->integer('anexo');
            $table->string('arquivo', 30);
            $table->string('caminho');
            $table->boolean('flagExportado');
            $table->string('lote', 3);
            $table->string('tipo', 20);
            $table->string('categoria', 20);
            $table->date('dataExportado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagems');
    }
}

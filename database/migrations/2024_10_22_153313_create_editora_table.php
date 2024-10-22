<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditoraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editora', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj')->unique();
            $table->string('nome_editora');
            $table->string('itens');
            $table->double('preco');
            $table->string('nota_fiscal');
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
        Schema::dropIfExists('editora');
    }
}

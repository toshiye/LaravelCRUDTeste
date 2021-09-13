<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('textos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('conteudo');
            $table->string('autor');
            $table->timestamps();
        });
    }

    // Neste caso a configuração do arquivo env tem de ser:

    // DB_CONNECTION=pgsql
    // DB_HOST=127.0.0.1
    // DB_PORT=5432
    // DB_DATABASE=postgres
    // DB_USERNAME=postgres
    // DB_PASSWORD=Shigeyoshi@21

    // public function up()
    // {
    //     Schema::create('teste.textos', function (Blueprint $table) {
    //         $table->id();
    //         $table->string('titulo');
    //         $table->string('conteudo');
    //         $table->string('autor');
    //         $table->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('textos');
    }
}

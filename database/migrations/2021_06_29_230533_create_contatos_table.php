<?php

use App\Models\Agenda\Contato;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->id();
            $table->string("nome",100);
            $table->string("sobrenome",100)->nullable();
            $table->string("telefone_celular",100)->nullable();
            $table->string("telefone_fixo",100)->nullable();
            $table->string("email",100)->nullable();
            $table->text("observacoes")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        $contatos[] = [
            'nome'=>"Igor",
            'sobrenome'=>"Oliveira Vilneck",
            'telefone_celular'=>"(55) 99940-1876",
            'telefone_fixo'=>"",
            'email'=>"igvilneck@gmail.com",
        ];

        foreach($contatos as $contato)
        {
            Contato::create($contato);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contatos');
    }
}

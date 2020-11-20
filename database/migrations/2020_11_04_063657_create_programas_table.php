<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->id();
            $table->char('tipo_programa');
            $table->string('nombre_programa');
            $table->string('decano')->nullable();
            $table->string('jefe_programa');
            $table->string('secretario1');
            $table->string('secretario2')->nullable();
            $table->text('video_programa');
            $table->string('ciudad');
            $table->string('telefono1');
            $table->string('telefono2')->nullable();
            $table->string('valor_semestre');
            $table->string('url');
            $table->string('correo_programa');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programas');
    }
}

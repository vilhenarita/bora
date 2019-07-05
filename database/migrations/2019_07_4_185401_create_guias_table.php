<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img');
            $table->string('last_name');
            $table->string('email');
            $table->date('birthday');
            $table->string('password');
            $table->string('gender');
            $table->string('phone');
            $table->string('rg');
            $table->string('cpf');
            $table->boolean('has_english');
            $table->boolean('has_cnh');
            $table->boolean('has_car');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guias');
    }
}

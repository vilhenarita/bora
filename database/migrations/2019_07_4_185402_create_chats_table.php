<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('message');
            $table->timestamp('date')->nullable();
            $table->unsignedBigInteger('guia_id')->nullable();
            $table->foreign('guia_id')->references('id')->on('guias');
            $table->unsignedBigInteger('turista_id')->nullable();
            $table->foreign('turista_id')->references('id')->on('turistas');
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
        Schema::dropIfExists('chats');
    }
}

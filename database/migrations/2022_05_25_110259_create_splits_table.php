<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSplitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('splits', function (Blueprint $table) {
            $table->id();
            $table->string('influencer')->nullable();
            $table->string('cliente')->nullable();
            $table->string('valor')->nullable();
            $table->string('valor_total')->nullable();
            $table->integer('status')->default(0);
            $table->integer('id_pedido')->nullable();
            $table->integer('id_influencer')->nullable();
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
        Schema::dropIfExists('splits');
    }
}

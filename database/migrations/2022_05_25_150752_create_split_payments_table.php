<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSplitPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('split_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pedido')->nullable();
            $table->string('valor_total')->nullable();
            $table->string('comissao')->nullable();
            $table->string('cliente')->nullable();
            $table->string('influencer')->nullable();
            $table->string('comprovante')->nullable();
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
        Schema::dropIfExists('split_payments');
    }
}

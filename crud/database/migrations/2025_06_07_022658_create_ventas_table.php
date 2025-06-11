<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fkCliente');
            $table->decimal('total', 10, 2);
        });
    }

    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
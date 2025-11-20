<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('reservations', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('phone');
        $table->string('email')->nullable();
        $table->date('date');
        $table->time('time');
        $table->integer('guests');
        $table->text('note')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('reservations');
}

};

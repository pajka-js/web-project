<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKontaktyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontakty', function (Blueprint $table) {
            $table->increments('id');
            $table->string('meno', 45);
            $table->string('email')->unique();
            $table->string('telefon', 20);
            $table->string('pozicia', 45);
            $table->string('fakulta', 45);
            $table->text('poznamka');
            $table->string('web', 250);
            $table->string('photo', 50);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kontakty');
    }
}

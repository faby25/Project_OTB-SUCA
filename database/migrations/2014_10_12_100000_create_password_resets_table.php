<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
          // $table->string('token');

            $table->id();
            $table->string('CI',12)->unique();
            $table->string('Nombre',25);
            $table->string('Apellido',25);
            $table->string('email')->index();
            $table->string('Direccion',50);
            $table->string('Telefono',25);
            $table->string('password');


            $table->rememberToken();
            $table->timestamps();
            // $table->timestamp('created_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
}

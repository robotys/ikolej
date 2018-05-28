<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('citizenship');
            $table->string('idno');
            $table->string('country');
            $table->string('fullname');
            $table->string('age');
            $table->string('address');
            $table->string('postcode');
            $table->string('state');
            $table->string('contact_no');
            $table->string('email');
            $table->string('status')->default('new');
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
        Schema::dropIfExists('registrations');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerts', function (Blueprint $table) {
            $table->id();

            $table->string('buyer_name');
            $table->string('carrier_name');
            $table->string('store');
            $table->string('tracking_code');
            $table->string('bill_file');
            $table->text('description');
            $table->integer('status');

            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('locker_id')->constrained('lockers');

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
        Schema::dropIfExists('alerts');
    }
};

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
        Schema::create('pesan', function (Blueprint $table) {
            $table->bigIncrements('id_pesan');
            $table->unsignedBigInteger('customer_id');
            $table->text('image');
            $table->text('pesan');
            $table->timestamps();
            $table->foreign('customer_id')->references('id_customer')->on('customer')->onDelete('cascade')->cascadeOnUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

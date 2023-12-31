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
        Schema::create('womac_has_operation', function (Blueprint $table) {
            $table->id()->unsignedBigInteger()->nullable(false)->unique()->autoIncrement();

            $table->unsignedBigInteger('id_womac')->nullable(false);
            $table->unsignedBigInteger('id_patient')->nullable(false);
            $table->unsignedBigInteger('id_operation')->nullable(false);
            $table->unsignedBigInteger('id_visit')->nullable(false);
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

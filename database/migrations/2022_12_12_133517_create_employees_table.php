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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('document');
            $table->date('birthdate');
            $table->integer('age');
            $table->string('phone');
            $table->string('address');
            $table->string('job');
            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')
                    ->references('id')->on('areas')
                    ->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('contract_id');
            $table->foreign('contract_id')
                    ->references('id')->on('contracts')
                    ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};

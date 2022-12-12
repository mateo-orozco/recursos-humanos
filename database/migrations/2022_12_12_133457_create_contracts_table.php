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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->double('salary');
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('type_contract_id');
            $table->foreign('type_contract_id')
                    ->references('id')->on('type_contracts')
                    ->onDelete('cascade')->onUpdate('cascade');
            // create at, delete at
            
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
        Schema::dropIfExists('contracts');
    }
};

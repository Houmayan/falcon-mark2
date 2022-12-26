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
        //comment
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('status')->default('0');// subsription status , From view file this will send 1
            $table->string('plan')->nullable();
            $table->string('price')->nullable();
            $table->string('sub_end')->nullable();
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
        Schema::dropIfExists('subscriptions');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthllyPayedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthlly_payeds', function (Blueprint $table) {
            $table->id();
            $table->integer("ministry_id");
            $table->integer("item_id");
            $table->integer("door_id");
            $table->float("total");
            $table->date("date");
            $table->integer("created_id");
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
        Schema::dropIfExists('monthlly_payeds');
    }
}

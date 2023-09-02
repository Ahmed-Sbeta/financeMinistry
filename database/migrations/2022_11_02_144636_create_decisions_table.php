<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decisions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('decisionsNumber');
            $table->integer('issuer');
            $table->string('receiver');
            $table->date('date');
            $table->date('expire')->nullable();
            $table->string('description')->nullable();
            $table->string('results')->nullable();
            $table->string('subject');
            $table->string('file');
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
        Schema::dropIfExists('decisions');
    }
}

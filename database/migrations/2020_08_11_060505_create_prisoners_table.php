<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrisonersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prisoners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pre_location');
            $table->string('par_location');
            $table->string('gender');
            $table->string('age');
            $table->string('education');
            $table->string('Nationality');
            $table->string('issue_date');
            $table->string('crime_type');
            $table->string('release_date');
            $table->string('crime_spot');
            $table->string('photo');
            $table->string('status')->default(0);
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
        Schema::dropIfExists('prisoners');
    }
}

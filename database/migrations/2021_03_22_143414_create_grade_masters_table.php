<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade_masters', function (Blueprint $table) {
            $table->id();
            $table->Integer('Program_code');
            $table->string('Grade_name')->unique();
            $table->Integer('Grade_strt_pct');
            $table->Integer('Grade_end_pct');
            $table->Float('Grade_points');
            $table->String('Grade_class_name')->unique();
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
        Schema::dropIfExists('grade_masters');
    }
}

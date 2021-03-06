<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubstationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('substations', function (Blueprint $table) {
            $table->string('substation_name');
            $table->string('injection_nerc_code', 3);
            $table->string('injection_kaedc_code', 3);
            $table->string('area_office_nerc', 2);
            $table->string('area_office_kaedc', 2);
            $table->timestamps();

            $table->primary(['injection_nerc_code', 'injection_kaedc_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('substations');
    }
}

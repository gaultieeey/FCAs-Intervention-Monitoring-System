<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFcaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fcas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fca_name');
            $table->date('application_received_date');
            $table->date('date_accredited');
            $table->string('fca_type');
            $table->string('barangay')->nullable();
            $table->string('municipality');
            $table->string('province');
            $table->string('contact_person')->nullable();
            $table->string('contact_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fca');
    }
}

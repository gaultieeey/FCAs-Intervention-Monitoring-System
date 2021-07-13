<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lgu_ref_code');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('extensionname');
            $table->date('birthdate');
            $table->float('area');
            $table->string('commodity');
            $table->string('system_gen_control_num');
            $table->integer('fca_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}

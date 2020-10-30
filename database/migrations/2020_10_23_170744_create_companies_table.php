<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_old')->nullable();
            $table->string('reg_no');
            $table->string('reg_no_old')->nullable();
            $table->string('email')->unique();
            $table->string('phone_no')->nullable();
            $table->string('reg_address')->nullable();
            $table->string('reg_address2')->nullable();
            $table->string('reg_address3')->nullable();
            $table->string('reg_postcode_id')->nullable();
            $table->string('reg_city')->nullable();
            $table->integer('reg_state_id')->unsigned()->nullable();
            $table->string('reg_country')->nullable();
            $table->string('buss_address')->nullable();
            $table->string('buss_address2')->nullable();
            $table->string('buss_address3')->nullable();
            $table->string('buss_postcode')->nullable();
            $table->string('buss_city')->nullable();
            $table->string('buss_country')->nullable();
            $table->text('ssm_cert')->nullable();
            $table->text('auth_letter')->nullable();
            $table->boolean('consultant')->default(false);
            $table->integer('consultant_id')->unsigned()->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('companies');
    }

}

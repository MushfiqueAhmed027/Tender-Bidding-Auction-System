<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiddersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bidders', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->integer('categories_id')->unsigned();
            $table->string('legal_status');
            $table->string('registration_no');
            $table->date('establishment_year')->nullable();
            $table->integer('TIN');
            $table->integer('license_no');
            $table->integer('BIN');
            $table->integer('phone_no');
            $table->longText('description');
            $table->longText('Head_office_address');
            $table->string('Zip_code');
            $table->string('company_website');
            $table->string('title');
            $table->string('name');
            $table->string('gender');
            $table->string('national_id');
            $table->string('department');
            $table->string('trade_license')->nullable();
            $table->string('memorandum_of_article')->nullable();
            $table->string('TIN_certificate')->nullable();
            $table->string('BIN_certificate')->nullable();
            $table->string('bank_solvency_certificate ')->nullable();
            $table->string('associates_membership_certificate')->nullable();
            $table->string('company_profile')->nullable();
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('bidders');
    }
}
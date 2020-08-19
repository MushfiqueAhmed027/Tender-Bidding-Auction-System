<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('categories_id')->unsigned();
            $table->date('date')->nullable();
            $table->longText('subject');
            $table->string('type');
            $table->longText('background');
            $table->longText('objective');
            $table->longText('work_required');
            $table->longText('scope_of_work');
            $table->longText('roles_responsibilities');
            $table->longText('time_frame');
            $table->longText('deliverables');
            $table->longText('terms_conditions');
            $table->longText('service_provider');
            $table->longText('assignment_location');
            $table->longText('applying_procedure');
            $table->longText('evaluation_criteria');
            $table->longText('documents_submit');
            $table->longText('financial_offer');
            $table->date('submitted_on')->nullable();
            $table->longText('acknowledgement');
            $table->longText('tenderer_signature');
            $table->longText('note');
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
        Schema::dropIfExists('tors');
    }
}
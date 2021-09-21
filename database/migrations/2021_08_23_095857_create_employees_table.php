<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');//
            $table->integer('Job_number');//
            $table->string('Job_title');//
            $table->decimal('salary');//

            $table->unsignedBigInteger('contract_id')->nullable();
            $table->foreign('contract_id')->references('id')->on('contracts')->onDelete('cascade');

            $table->unsignedBigInteger('relative_id')->nullable();
            $table->foreign('relative_id')->references('id')->on('relatives_types')->onDelete('cascade');

            $table->unsignedBigInteger('insurance_type_id')->nullable();
            $table->foreign('insurance_type_id')->references('id')->on('insurancetypes')->onDelete('cascade');

            $table->unsignedBigInteger('evaluation_type_id')->nullable();
            $table->foreign('evaluation_type_id')->references('id')->on('evaluation_types')->onDelete('cascade');

            $table->unsignedBigInteger('insurance_grade_id')->nullable();
            $table->foreign('insurance_grade_id')->references('id')->on('insurance_grates')->onDelete('cascade');
            $table->integer('family_members');//
            $table->integer('wives_number');
            $table->integer('grandchildren');
            $table->softDeletes();
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
        Schema::dropIfExists('employees');
    }
}

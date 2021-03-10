<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentPersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_personal_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('guardian_name')->nullable();
            $table->string('student_contact_no');
            $table->string('parent_contact_no');
            $table->string('student_nid_no')->nullable();
            $table->string('student_email')->nullable();
            $table->string('student_present_address');
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
        Schema::dropIfExists('student_personal_infos');
    }
}

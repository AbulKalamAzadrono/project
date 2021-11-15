<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->integer('reg_no')->unique();
            $table->integer('money_receipt_no')->unique();
            $table->string('student_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('phone');
            $table->string('address');
            $table->string('birthday');
            $table->string('guardian_number');
            $table->string('email');
            $table->string('image')->nullable();
            $table->string('education_qualification');
            $table->string('profession')->nullable();
            $table->boolean('select');
            $table->string('course_title');
            $table->integer('total_amount');
            $table->integer('amount_paid');
            $table->integer('balance_due');
            $table->string('admission_date');
            $table->string('next_payment_date');
            $table->string('weekly_class')->nullable();
            $table->string('total_class')->nullable();
            $table->string('student_availability');

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
        Schema::dropIfExists('students');
    }
}

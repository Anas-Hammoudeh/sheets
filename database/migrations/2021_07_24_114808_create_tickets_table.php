<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('emp_name');
            $table->string('student_name')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('issue')->nullable();
            $table->string('resp_emp')->nullable();
            $table->string('notes')->nullable();

            $table->string('status')->nullable();
            $table->string('notes2')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */ //up for creating an table
    public function up(): void
    {
        // below code is for create a table using migration
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customers_id');
            $table->string('name',60);
            $table->string('email',100);
            $table->enum('gender',["male","female","other"])->nullable();
            $table->text('adress');
            $table->date('dob')->nullable();
            $table->string('password');
            $table->boolean('status')->default(1);
            $table->integer('points')->default(0);
            $table->timestamps();   //created at updated at 
        });
    }

    /**
     * Reverse the migrations.
     */ //down for existing table delte and than creting a table
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->string('national_code')->unique()->nullable();
            $table->string('birth_code')->unique()->nullable();;
            $table->string('birth_place')->nullable();
            $table->dateTime('birth_day')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('status_detail')->nullable();
            $table->string('name_identifier')->nullable();
            $table->string('mobile_identifier')->nullable();
            $table->string('mother_lang')->nullable();
            $table->tinyInteger('marital')->default(0)->comment('0 => single, 1 => married');
            $table->tinyInteger('activation')->default(0)->comment('0 => inactive, 1 => active');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};

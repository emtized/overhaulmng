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
            $table->text('image');
            $table->string('father_name');
            $table->string('national_code')->unique();
            $table->string('birth_code')->unique();
            $table->string('birth_place');
            $table->timestamp('birth_day');
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('status_detail')->default(0);
            $table->string('name_identifier');
            $table->string('mobile_identifier');
            $table->string('mother_lang')->nullable();
            $table->tinyInteger('marital')->default(0)->comment('0 => single, 1 => married');
            $table->tinyInteger('activation')->default(0)->comment('0 => inactive, 1 => active');
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

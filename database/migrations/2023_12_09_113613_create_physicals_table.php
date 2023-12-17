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
        Schema::create('physicals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('customer_id');

            $table->tinyInteger('disease')->default(0);
            $table->string('disease_detail')->nullable();

            $table->tinyInteger('first_disease')->default(0);
            $table->string('first_disease_detail')->nullable();

            $table->tinyInteger('drug')->default(0);
            $table->string('drug_detail')->nullable();

            $table->tinyInteger('hospital')->default(0);
            $table->string('hospital_detail')->nullable();

            $table->tinyInteger('surgery')->default(0);
            $table->string('surgery_detail')->nullable();

            $table->tinyInteger('specific_drug')->default(0);
            $table->string('specific_drug_detail')->nullable();

            $table->tinyInteger('smok')->default(0);
            $table->string('smok_detail')->nullable();

            $table->tinyInteger('smok_past')->default(0);
            $table->string('smok_past_detail')->nullable();

            $table->tinyInteger('sport')->default(0);
            $table->string('sport_detail')->nullable();

            $table->tinyInteger('work')->default(0);
            $table->string('work_detail')->nullable();

            $table->tinyInteger('Leave')->default(0);


            $table->tinyInteger('Commission')->default(0);
            $table->string('Commission_detail')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('physicals');
    }
};

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

            $table->tinyInteger('disease');
            $table->string('disease_detail');

            $table->tinyInteger('first_disease');
            $table->string('first_disease_detail');

            $table->tinyInteger('drug');
            $table->string('drug_detail');

            $table->tinyInteger('hospital');
            $table->string('hospital_detail');

            $table->tinyInteger('surgery');
            $table->string('surgery_detail');

            $table->tinyInteger('specific_drug');
            $table->string('specific_drug_detail');

            $table->tinyInteger('smok');
            $table->string('smok_detail');

            $table->tinyInteger('smok_past');
            $table->string('smok_past_detail');

            $table->tinyInteger('sport');
            $table->string('sport_detail');

            $table->tinyInteger('work');
            $table->string('work_detail');

            $table->tinyInteger('Leave');


            $table->tinyInteger('Commission');
            $table->string('Commission_detail');

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

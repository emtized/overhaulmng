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
        Schema::create('customer_insurance', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('customer_id');
            $table->tinyInteger('job_status')->default(0);
            $table->tinyInteger('job_type')->default(0);
            $table->string('job_place');
            $table->tinyInteger('status')->default(0);
            $table->string('number_insurance');
            $table->string('access');
            $table->decimal('weight', 10, 2);
            $table->decimal('height', 10, 1)->comment('cm unit');
            $table->tinyInteger('shoe_size')->default(0);
            $table->tinyInteger('dress_size')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_insurance');
    }
};

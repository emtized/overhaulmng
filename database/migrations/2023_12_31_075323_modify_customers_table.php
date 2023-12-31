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
        Schema::table('customers', function (Blueprint $table) {
            $table->dropColumn('birth_place');

            $table->uuid('province_id')->nullable()->after('birth_day');
            $table->uuid('city_id')->nullable()->after('province_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->string('birth_place')->nullable()->after('birth_day');

            $table->dropColumn('province_id');
            $table->dropColumn('city_id');
        });
    }
};

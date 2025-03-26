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
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('uuid')->after('id')->nullable();
            $table->integer('role')->after('email')->nullable();
            $table->boolean('admin')->after('role')->default(0);
            $table->boolean('block')->after('admin')->default(0);
            $table->string('country_name')->after('block')->nullable();
            $table->string('city_name')->after('country_name')->nullable();
            $table->string('longitude')->after('city_name')->nullable();
            $table->string('latitude')->after('longitude')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['uuid', 'role', 'admin', 'block', 'country_name', 'city_name', 'longitude', 'latitude']);
        });
    }
};

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
        Schema::create('app_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name_la');
            $table->string('name_en');
            $table->string('tel');
            $table->string('website')->nullabel();
            $table->string('facebook')->nullabel();
            $table->string('app_android')->nullabel();
            $table->string('app_ios')->nullabel();
            $table->string('app_huawei')->nullabel();
            $table->text('detail')->nullabel();
            $table->string('logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_profiles');
    }
};

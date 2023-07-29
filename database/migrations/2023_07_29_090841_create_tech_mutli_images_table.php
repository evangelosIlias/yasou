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
        Schema::create('tech_mutli_images', function (Blueprint $table) {
            $table->id();
            $table->string('tech_multi_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        Schema::table('tech_mutli_images', function (Blueprint $table) {
            $table->dropColumn('tech_multi_image');
        });
        Schema::dropIfExists('tech_mutli_images');
    }
};

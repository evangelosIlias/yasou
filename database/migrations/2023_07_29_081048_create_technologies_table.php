<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         
        Schema::create('technologies', function (Blueprint $table) {
            $table->id();
            $table->string('tech_title')->nullable();
            $table->string('tech_short_title')->nullable();
            $table->text('tech_short_description')->nullable();
            $table->text('tech_long_description')->nullable();
            $table->string('tech_image')->nullable();
            $table->timestamps();
        });

         // Insert the default record with ID 1
        DB::table('technologies')->insert([
            'id' => 1,
            'tech_title' => 'Default Title',
            'tech_short_title' => 'Default Short Title',
            'tech_short_description' => 'Default Short Description',
            'tech_long_description' => 'Default Long Description',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        Schema::table('technologies', function (Blueprint $table) {
            // Drop individual columns to rollback without losing the default record
            $table->dropColumn('tech_title');
            $table->dropColumn('tech_short_title');
            $table->dropColumn('tech_short_description');
            $table->dropColumn('tech_long_description');
            $table->dropColumn('tech_image');
        });

        Schema::dropIfExists('technologies');
    }
};

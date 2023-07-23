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
        Schema::create('portfolio', function (Blueprint $table) {
            $table->id();
            $table->string('portfolio_name')->nullable();
            $table->string('portfolio_title')->nullable();
            $table->string('portfolio_image')->nullable();
            $table->text('portfolio_description')->nullable();
            $table->timestamps();
        });

        // // Insert the default record with ID 1
        // DB::table('portfolio')->insert([
        //     'id' => 1,
        //     'portfolio_name' => 'Default Title',
        //     'portfolio_title' => 'Default Short Title',
        //     'portfolio_description' => 'Default Short Description',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portfolio', function (Blueprint $table) {
            // Drop individual columns to rollback without losing the default record
            $table->dropColumn('portfolio_name');
            $table->dropColumn('portfolio_title');
            $table->dropColumn('portfolio_image');
            $table->dropColumn('portfolio_description');
        });

        Schema::dropIfExists('portfolio');
    }
};

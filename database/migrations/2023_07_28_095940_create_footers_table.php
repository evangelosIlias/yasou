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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('footer_number')->nullable();
            $table->text('footer_short_description')->nullable();
            $table->string('footer_address')->nullable();
            $table->string('footer_email')->nullable();
            $table->string('footer_linkedin')->nullable();
            $table->string('footer_copyright')->nullable();
            $table->timestamps();
        });
    

    // // Insert the default record with ID 1
        DB::table('footers')->insert([
            'id' => 1,
            'footer_number' => 'Default Number',
            'footer_short_description' => 'Default Short Descritpiom',
            'footer_address' => 'Default Address',
            'footer_email' => 'Default Email',
            'footer_linkedin' => 'Default Leinkin',
            'footer_copyright' => 'Default Copyright',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('footers', function (Blueprint $table) {
            // Drop individual columns to rollback without losing the default record
            $table->dropColumn('footer_number');
            $table->dropColumn('footer_short_description');
            $table->dropColumn('footer_address');
            $table->dropColumn('footer_email');
            $table->dropColumn('footer_linkedin');
            $table->dropColumn('footer_copyright');
        });

        Schema::dropIfExists('footers');
    }
};
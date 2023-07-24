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
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->id();
            $table->string('blog_category')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {    
        Schema::table('blog_categories', function (Blueprint $table) {
        // Drop individual columns to rollback without losing the default record
        $table->dropColumn('blog_category');
    });
        Schema::dropIfExists('blog_categories');
    }
};

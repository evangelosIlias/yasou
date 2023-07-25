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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_category_id')->nullable();
            $table->string('blog_title')->nullable();
            $table->string('blog_image')->nullable();
            $table->string('blog_tags')->nullable();
            $table->text('blog_description')->nullable();
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
        Schema::table('blogs', function (Blueprint $table) {
            // Drop individual columns to rollback without losing the default record
            $table->dropColumn('blog_category_id');
            $table->dropColumn('blog_title');
            $table->dropColumn('blog_image');
            $table->dropColumn('blog_tags');
            $table->dropColumn('blog_description');
        });

        Schema::dropIfExists('blogs');
    }
};

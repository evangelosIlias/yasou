<?php

// use Illuminate\Database\Migrations\Migration;
// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Support\Facades\Schema;

// return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         Schema::create('about', function (Blueprint $table) {
//             $table->id();
//             $table->string('title')->nullable();
//             $table->string('short_title')->nullable();
//             $table->text('short_description')->nullable();
//             $table->text('long_description')->nullable();
//             $table->string('about_image')->nullable();
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::table('about', function (Blueprint $table) {
//             $table->dropColumn('title');
//             $table->dropColumn('short_title');
//             $table->dropColumn('short_description');
//             $table->dropColumn('long_description');
//             $table->dropColumn('about_image');
//         });

//         Schema::dropIfExists('about');
//     }
// };

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
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('short_title')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->string('about_image')->nullable();
            $table->timestamps();
        });

        // Insert the default record with ID 1
        DB::table('about')->insert([
            'id' => 1,
            'title' => 'Default Title',
            'short_title' => 'Default Short Title',
            'short_description' => 'Default Short Description',
            'long_description' => 'Default Long Description',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Delete the default record with ID 1
        DB::table('about')->where('id', 1)->delete();

        Schema::dropIfExists('about');
    }
};


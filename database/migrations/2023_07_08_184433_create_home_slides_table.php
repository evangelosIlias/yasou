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
//         Schema::create('home_slides', function (Blueprint $table) {
//             $table->bigIncrements('id');
//             $table->string('title')->nullable();
//             $table->string('short_title')->nullable();
//             $table->string('home_image')->nullable();
//             $table->string('video_url')->nullable();
//             $table->timestamps();
//         });
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         Schema::table('home_slides', function (Blueprint $table) {
//             $table->dropColumn('title');
//             $table->dropColumn('short_title');
//             $table->dropColumn('home_image');
//             $table->dropColumn('video_url');
//         });

//         Schema::dropIfExists('home_slides');
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
        Schema::create('home_slides', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('short_title')->nullable();
            $table->string('home_image')->nullable();
            $table->string('video_url')->nullable();
            $table->timestamps();
        });

        // Insert the default record with ID 1
        DB::table('home_slides')->insert([
            'id' => 1,
            'title' => 'Default Title',
            'short_title' => 'Default Short Title',
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
        DB::table('home_slides')->where('id', 1)->delete();

        Schema::dropIfExists('home_slides');
    }
};


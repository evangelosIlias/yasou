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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('contact_name')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_subject')->nullable();
            $table->string('contact_number')->nullable();
            $table->text('contact_message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        Schema::table('contacts', function (Blueprint $table) {
            // Drop individual columns to rollback without losing the default record
            $table->dropColumn('contact_name');
            $table->dropColumn('contact_email');
            $table->dropColumn('contact_subject');
            $table->dropColumn('contact_number');
            $table->dropColumn('contact_message');
        });
        Schema::dropIfExists('contacts');
    }
};

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
        Schema::table('calendar_questions', function (Blueprint $table) {
            $table->integer('position')->default(1);
            $table->boolean('is_required')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('calendar_questions', function (Blueprint $table) {
            $table->dropColumn('position');
            $table->dropColumn('is_required');
        });
    }
};

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
        Schema::table('users', function(Blueprint $table) {
            $table->integer('id_type');
            $table->integer('id_no');
            $table->string('gender');
            $table->date('dob');
            $table->text('address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('id_type');
            $table->dropColumn('id_no');
            $table->dropColumn('gender');
            $table->dropColumn('dob');
            $table->dropColumn('address');
        });
    }
};

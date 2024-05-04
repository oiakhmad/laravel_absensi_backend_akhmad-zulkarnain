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
        Schema::table('users', function (Blueprint $table) {
               $table->string('phone')->nullable();
               $table->enum('role',['admin','supervisor', 'staff'])->default('staff');
               $table->string('position')->nullable();
               $table->string('departement')->nullable();
               $table->text('face_embedding')->nullable();
               $table->string('image_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('role');
            $table->dropColumn('position');
            $table->dropColumn('departement');
            $table->dropColumn('face_embedding');
            $table->dropColumn('image_url');
        });
    }
};

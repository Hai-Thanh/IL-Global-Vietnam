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
        Schema::table('services', function (Blueprint $table) {
            $table->longText('type_name_vi')->nullable();
            $table->longText('type_name_en')->nullable();
            $table->longText('type_name_zh_cn')->nullable();
            $table->longText('type_name_ko')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('type_name_vi');
            $table->dropColumn('type_name_en');
            $table->dropColumn('type_name_zh_cn');
            $table->dropColumn('type_name_ko');
        });
    }
};

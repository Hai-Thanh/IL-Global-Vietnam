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
        Schema::create('why_choose_us_settings', function (Blueprint $table) {
            $table->id();
            $table->longText('titleWhy_vi')->nullable();
            $table->longText('titleWhy_en')->nullable();
            $table->longText('titleWhy_zh_cn')->nullable();
            $table->longText('titleWhy_ko')->nullable();

            $table->longText('describeWhy_vi')->nullable();
            $table->longText('describeWhy_en')->nullable();
            $table->longText('describeWhy_zh_cn')->nullable();
            $table->longText('describeWhy_ko')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_choose_us_settings');
    }
};

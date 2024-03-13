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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('title_about_vi')->nullable();
            $table->string('title_about_en')->nullable();
            $table->string('title_about_zh_cn')->nullable();
            $table->string('title_about_ko')->nullable();
            $table->longText('img_about')->nullable();
            $table->longText('describe_about_vi')->nullable();
            $table->longText('describe_about_en')->nullable();
            $table->longText('describe_about_zh_cn')->nullable();
            $table->longText('describe_about_ko')->nullable();
            $table->longText('name_us')->nullable();
            $table->longText('describe_us_vi')->nullable();
            $table->longText('describe_us_en')->nullable();
            $table->longText('describe_us_zh_cn')->nullable();
            $table->longText('describe_us_ko')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};

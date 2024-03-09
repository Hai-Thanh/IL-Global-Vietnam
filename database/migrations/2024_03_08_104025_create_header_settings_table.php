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
        Schema::create('header_settings', function (Blueprint $table) {
            $table->id();
            $table->time('time_in')->nullable()->comment('giờ vào');
            $table->time('time_out')->nullable()->comment('giờ ra');
            $table->string('day_off')->nullable()->comment('ngày nghỉ');
            $table->string('link_linke_in')->nullable()->comment('Link social LinkedIn');
            $table->string('link_fb')->nullable()->comment('Link social FaceBook');
            $table->string('link_tw')->nullable()->comment('Link social Twitter');
            $table->string('link_ins')->nullable()->comment('instagram');
            $table->string('link_yt')->nullable()->comment('youtube');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('header_settings');
    }
};

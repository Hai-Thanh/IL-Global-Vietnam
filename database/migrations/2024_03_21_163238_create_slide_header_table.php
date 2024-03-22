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
        Schema::create('slide_headers', function (Blueprint $table) {
            $table->id();
            $table->string('image_slide')->nullable();
            $table->longText('title_slide_vi')->nullable();
            $table->longText('title_slide_en')->nullable();
            $table->longText('title_slide_zh_cn')->nullable();
            $table->longText('title_slide_ko')->nullable();

            $table->longText('describe_slide_vi')->nullable();
            $table->longText('describe_slide_en')->nullable();
            $table->longText('describe_slide_zh_cn')->nullable();
            $table->longText('describe_slide_ko')->nullable();

            $table->integer('id_service');
            $table->boolean('status')->default('1');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slide_headers');
    }
};

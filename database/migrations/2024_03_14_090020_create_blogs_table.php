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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->longText('title_blog_vi')->nullable();
            $table->longText('title_blog_en')->nullable();
            $table->longText('title_blog_zh_cn')->nullable();
            $table->longText('title_blog_ko')->nullable();

            $table->longText('describe_blog_vi')->nullable();
            $table->longText('describe_blog_en')->nullable();
            $table->longText('describe_blog_zh_cn')->nullable();
            $table->longText('describe_blog_ko')->nullable();

            $table->longText('title_sub_blog_vi')->nullable();
            $table->longText('title_sub_blog_en')->nullable();
            $table->longText('title_sub_blog_zh_cn')->nullable();
            $table->longText('title_sub_blog_ko')->nullable();

            $table->longText('describe_sub_blog_vi')->nullable();
            $table->longText('describe_sub_blog_en')->nullable();
            $table->longText('describe_sub_blog_zh_cn')->nullable();
            $table->longText('describe_sub_blog_ko')->nullable();

            $table->longText('img_main_blog')->nullable();
            $table->boolean('status')->default(\App\Enums\BlogStatus::ACTIVE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};

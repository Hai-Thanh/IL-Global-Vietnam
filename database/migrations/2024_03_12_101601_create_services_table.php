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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();

            $table->string('img_main')->nullable();

            $table->string('title_vi')->nullable();
            $table->string('title_en')->nullable();
            $table->string('title_zh_cn')->nullable();
            $table->string('title_ko')->nullable();

            $table->longText('describe_vi')->nullable();
            $table->longText('describe_en')->nullable();
            $table->longText('describe_zh_cn')->nullable();
            $table->longText('describe_ko')->nullable();

            $table->string('title_sub_vi')->nullable();
            $table->string('title_sub_en')->nullable();
            $table->string('title_sub_zh_cn')->nullable();
            $table->string('title_sub_ko')->nullable();

            $table->longText('describe_sub_vi')->nullable();
            $table->longText('describe_sub_en')->nullable();
            $table->longText('describe_sub_zh_cn')->nullable();
            $table->longText('describe_sub_ko')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

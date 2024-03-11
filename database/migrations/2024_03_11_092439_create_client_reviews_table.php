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
        Schema::create('client_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('Thumbnail');
            $table->integer('star_rate');
            $table->longText('describe_vi');
            $table->longText('describe_en');
            $table->longText('describe_zh_cn');
            $table->longText('describe_ko');
            $table->longText('position');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_reviews');
    }
};

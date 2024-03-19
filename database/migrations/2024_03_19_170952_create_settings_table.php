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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->longText('logo')->nullable();
            $table->longText('address')->nullable();
            $table->longText('link_map')->nullable();
            $table->string('phone')->nullable();
            $table->longText('describe_vi')->nullable();
            $table->longText('describe_en')->nullable();
            $table->longText('describe_ko')->nullable();
            $table->longText('describe_zh_cn')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

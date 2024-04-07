<?php

use App\Enums\CategoriesStatus;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->longText('name_vi')->nullable();
            $table->longText('name_en')->nullable();
            $table->longText('name_zh_cn')->nullable();
            $table->longText('name_ko')->nullable();
            $table->boolean('status')->default(CategoriesStatus::ACTIVE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};

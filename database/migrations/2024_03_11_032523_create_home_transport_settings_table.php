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
        Schema::create('transport_company_settings', function (Blueprint $table) {
            $table->id();
            $table->longText('title_vi')->nullable();
            $table->longText('title_en')->nullable();
            $table->longText('title_zh_cn')->nullable();
            $table->longText('title_ko')->nullable();

            $table->longText('describe_vi')->nullable();
            $table->longText('describe_en')->nullable();
            $table->longText('describe_zh_cn')->nullable();
            $table->longText('describe_ko')->nullable();

            $table->longText('title_service_vi')->nullable();
            $table->longText('title_service_en')->nullable();
            $table->longText('title_service_zh_cn')->nullable();
            $table->longText('title_service_ko')->nullable();

            $table->longText('describe_service_vi')->nullable();
            $table->longText('describe_service_en')->nullable();
            $table->longText('describe_service_zh_cn')->nullable();
            $table->longText('describe_service_ko')->nullable();

            $table->longText('title_cert_vi')->nullable();
            $table->longText('title_cert_en')->nullable();
            $table->longText('title_cert_zh_cn')->nullable();
            $table->longText('title_cert_ko')->nullable();

            $table->longText('describe_cert_vi')->nullable();
            $table->longText('describe_cert_en')->nullable();
            $table->longText('describe_cert_zh_cn')->nullable();
            $table->longText('describe_cert_ko')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transport_company_settings');
    }
};

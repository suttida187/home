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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable()->comment('ชื่อลูกค้า');
            $table->string('last_name')->nullable()->comment('นามสกุลลูกค้า');
            $table->string('phone_number')->nullable()->comment('หมายเลขโทรศัพท์');
            $table->string('email')->nullable()->comment('อีเมลของลูกค้า');
            $table->string('address')->nullable()->comment('ที่อยู่ของลูกค้า');
            $table->string('preferred_type')->nullable()->comment('ประเภทของอสังหาริมทรัพย์ที่ลูกค้าสนใจ');
            $table->string('budget')->nullable()->comment('งบประมาณที่ลูกค้าตั้งไว้');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};

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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable()->comment('ชื่อตัวแทนขาย');
            $table->string('last_name')->nullable()->comment('นามสกุลตัวแทนขาย');
            $table->string('phone_number')->nullable()->comment('หมายเลขโทรศัพท์');
            $table->string('email')->nullable()->comment('อีเมลของตัวแทนขาย');
            $table->text('assigned_properties')->nullable()->comment('รายชื่ออสังหาริมทรัพย์ที่ตัวแทนรับผิดชอบ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};

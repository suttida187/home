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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('property_name')->nullable()->comment('ชื่อของอสังหาริมทรัพย์'); 
            $table->string('property_type')->nullable()->comment('ประเภทของอสังหาริมทรัพย์ (บ้าน, คอนโด, ฯลฯ)'); 
            $table->string('location')->nullable()->comment('ที่ตั้งของอสังหาริมทรัพย์'); 
            $table->string('price')->nullable()->comment('ราคาของอสังหาริมทรัพย์'); 
            $table->float('area')->nullable()->comment('ขนาดพื้นที่ (ตร.ม. หรือ ไร่)'); 
            $table->string('status',50)->nullable()->comment('สถานะ (ขายแล้ว, ว่างขาย)'); 
            $table->string('description')->nullable()->comment('รายละเอียดเพิ่มเติมเกี่ยวกับอสังหาริมทรัพย์'); 
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};

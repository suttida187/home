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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('property_id')->nullable()->comment('หมายเลขอสังหาริมทรัพย์ที่เกี่ยวข้อง');
            $table->string('customer_id')->nullable()->comment('หมายเลขลูกค้าที่ทำธุรกรรม');
            $table->string('agent_id')->nullable()->comment('หมายเลขตัวแทนขายที่ทำธุรกรรม');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

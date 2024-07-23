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
        Schema::create('qr_tickets', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('payment_id')->unsigned();
            $table->foreign('payment_id')->references('id')->on('payments')->onUpdate('cascade');

            $table->string('token')->unique();
            $table->string('path');
            $table->enum('status', ['active', 'expired', 'used', 'returned'])->default('active');
            $table->timestamp('visited_date')->nullable();  // first visit
            $table->timestamp('access_period')->nullable();  // 72 hour
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_tickets');
    }
};

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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('passenger_id')->unsigned();
            $table->foreign('passenger_id')->references('id')->on('passengers')->onUpdate('cascade');

            $table->bigInteger('bus_route_id')->unsigned();
            $table->foreign('bus_route_id')->references('id')->on('bus_routes')->onUpdate('cascade');

            $table->string('order_id')->nullable();
            $table->integer('amount');
            $table->string('ticket_quantity');
            $table->string('status')->nullable();
            $table->string('partner_route');
            $table->string('error_code')->nullable();
            $table->string('error_message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};

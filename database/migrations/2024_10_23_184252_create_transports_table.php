<?php

use Domains\Transport\Enums\TransportAvailability;
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
        Schema::create('transports', function (Blueprint $table) {
            $table->uuid();
            $table->string('code');
            $table->float('temperature');
            $table->float('capacity');
            $table->boolean('active')->default(true);
            $table->string('availability')->nullable()->default(TransportAvailability::UNAVAILABLE);
            $table->uuid('owner_id')->nullable();

            $table->foreign('owner_id')->references('uuid')->on('owners');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transports');
    }
};

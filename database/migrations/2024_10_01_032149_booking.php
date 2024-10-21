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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('maFirstname');
            $table->string('maLastname');
            $table->string('maEmail')->unique();
            $table->string('maContactnumber');
            $table->string('maAddress');
            $table->date('maCheckInDate');
            $table->string('maRoom');
            $table->integer('maDays');
            $table->integer('maPax');
            $table->string('maSpecialRequest')->nullable();
            $table->integer('maTotalPrice');
            $table->integer('maRoomPrice');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

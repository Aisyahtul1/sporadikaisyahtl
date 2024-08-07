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
        Schema::create('sporadiks', function (Blueprint $table) {
            $table->id();
            $table->string('no_skt')->unique();
            $table->string('masyarakats_id');
            $table->string('ukt_timur');
            $table->string('ukt_barat');
            $table->string('ukt_selatan');
            $table->string('ukt_utara');
            $table->string('kepala_desa');
            $table->string('petugas_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sporadiks');
    }
};

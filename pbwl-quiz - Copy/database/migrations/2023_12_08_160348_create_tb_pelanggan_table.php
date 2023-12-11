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
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            $table->increments('pel_id');
            $table->string('gol_id');
            $table->string('pel_no',20);
            $table->string('pel_nama',50);
            $table->text('pel_alamat');
            $table->string('pel_hp',12);
            $table->string('pel_ktp',50);
            $table->string('pel_seri',50);
            $table->string('pel_meteran',11);
            $table->string('pel_aktif');
            $table->string('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pelanggan');
    }
};

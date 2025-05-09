<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('m_user', function (Blueprint $table) {
            $table->id('user_id');
            $table->unsignedBigInteger('level_id' )->index(); // indexing untuk ForeignKey
            $table->string('username', 20)->unique(); // unique untuk memastikan tidak ada username yang sama
            $table->string('nama', 100);
            $table->string('password');
            $table->timestamps();  

            //mendefinisikan foreign key pada kolom level-id mengacu pada kolom level_id di table m_level
            $table->foreign('level_id')->references('level_id')->on('m_level');
        });
    }


    public function down(): void
    {
        Schema :: dropIfExists('useri');
    }
};

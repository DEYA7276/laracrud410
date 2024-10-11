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
    Schema::create('exams', function (Blueprint $table) {
        $table->id('score_id');

        $table->foreignId('signature_id')->references('id')->on('signatures')->onDelete('cascade')->onUpdate('cascade');
        $table->string('title')->nullable();
        $table->foreignId('id_student')->references('id')->on('students')->onDelete('cascade')->onUpdate('cascade');
        $table->string('enrollment')->nullable();
        $table->string('note')->nullable();
        $table->foreignId('id_period')->references('id')->on('period')->onDelete('cascade')->onUpdate('cascade');
        $table->date('partial')->nullable();

        $table->timestamps();
    });
}

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};

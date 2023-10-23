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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('usia');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('domisili');
            $table->string('suku');
            $table->string('pekerjaan');
            $table->string('no_hp');
            $table->text('alamat');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->string('agama');
            $table->text('gambaran_diri');
            $table->string('hobi');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('provider');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

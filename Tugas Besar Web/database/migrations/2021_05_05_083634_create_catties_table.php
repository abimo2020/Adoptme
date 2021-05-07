<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCattiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catties', function (Blueprint $table) {
            $table->id();
            $table->char('kode_hewan',4)->unique()->nullable();
            $table->char('jenis_hewan');
            $table->integer('usia');
            $table->string('jenis_kelamin');
            $table->string('ras');
            $table->text('alamat');
            $table->text('deskripsi')->nullable();
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catties');
    }
}

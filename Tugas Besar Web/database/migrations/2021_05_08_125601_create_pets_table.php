<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
Use App\Models\Pet;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('kode_hewan');
            $table->string('jenis_hewan');
            $table->integer('usia');
            $table->string('jenis_kelamin');
            $table->string('ras');
            $table->char('no_hp',13);
            $table->text('alamat');
            $table->text('deskripsi');
            $table->boolean('adopted')->default(false);
            $table->boolean('allowed')->default(false);
            $table->string('foto');
            $table->string('nama_adopter')->nullable();
            $table->string('alamat_adopter')->nullable();
            $table->bigInteger('no_hp_adopter')->nullable();
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
        Schema::dropIfExists('pets');
    }
}

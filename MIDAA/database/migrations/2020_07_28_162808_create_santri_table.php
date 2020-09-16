<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSantriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Santri', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->char('kelas');
            $table->string('jenis kelamin');
            $table->datetime('Y-m-d H:i:s');
            $table->string('alamat');
            $table->char('peringkat');
            $table->char('rata nilai');
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
        Schema::dropIfExists('santri');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeBerketurunanSelayarColumnType extends Migration
{
    public function up()
    {
        Schema::table('pendaftarans', function (Blueprint $table) {
            $table->string('berketurunan_selayar')->change();
        });
    }

    public function down()
    {
        Schema::table('pendaftarans', function (Blueprint $table) {
            $table->integer('berketurunan_selayar')->change(); // Jika sebelumnya integer
        });
    }
}

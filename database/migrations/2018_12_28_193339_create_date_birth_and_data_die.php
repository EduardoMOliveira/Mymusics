<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDateBirthAndDataDie extends Migration
{
    
    public function up()
    {
        Schema::table('singers', function (Blueprint $table) {
            $table->dateTime('date_birth')->nullable();
        });

        Schema::table('singers', function (Blueprint $table) {
            $table->dateTime('date_die');
        });
    }

    public function down()
    {
        Schema::table('singers', function (Blueprint $table) {
            $table->dropColumn('date_birth');
        });
        
        Schema::table('singers', function (Blueprint $table) {
            $table->dropColumn('date_die');
        });
    }
}

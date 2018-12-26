<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSingersTable extends Migration
{
    
    public function up()
    {
        Schema::create('singers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255)->nullable();
            $table->string('nickname',70);
            $table->enum('gender', ['F', 'M', 'I'])->nullable();
            $table->enum('type', ['G', 'B', 'S'])->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('singers');
    }
}

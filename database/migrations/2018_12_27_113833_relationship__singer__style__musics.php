<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelationshipSingerStyleMusics extends Migration
{
    
    public function up()
    {
        Schema::table('singers', function (Blueprint $table) {
            $table->integer('style_music_id')->unsigned();
            $table->foreign('style_music_id')->references('id')->on('style_musics');
        });
    }
    
    public function down()
    {
        Schema::table('singers', function (Blueprint $table) {
            $table->dropForeign('singers_style_music_id_foreign');
            $table->dropColumn('style_music_id');
        });
    }
}

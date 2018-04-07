<?php namespace Agung\Agunggram\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAgungAgunggram extends Migration
{
    public function up()
    {
        Schema::create('agung_agunggram_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('uploader', 50);
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('agung_agunggram_');
    }
}

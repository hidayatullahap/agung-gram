<?php namespace Agung\Agunggram\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAgungAgunggram2 extends Migration
{
    public function up()
    {
        Schema::create('agung_agunggram_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('uploader_name', 50);
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('agung_agunggram_');
    }
}

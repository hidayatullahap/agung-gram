<?php namespace Agung\Agunggram\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAgungAgunggram extends Migration
{
    public function up()
    {
        Schema::dropIfExists('agung_agunggram_');
    }
    
    public function down()
    {
        Schema::create('agung_agunggram_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('uploader', 50);
            $table->text('description')->nullable();
            $table->timestamp('created_at')->default('CURRENT_TIMESTAMP');
        });
    }
}

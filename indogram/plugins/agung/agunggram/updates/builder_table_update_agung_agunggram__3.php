<?php namespace Agung\Agunggram\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgungAgunggram3 extends Migration
{
    public function up()
    {
        Schema::table('agung_agunggram_', function($table)
        {
            $table->string('image_name', 255);
        });
    }
    
    public function down()
    {
        Schema::table('agung_agunggram_', function($table)
        {
            $table->dropColumn('image_name');
        });
    }
}

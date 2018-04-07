<?php namespace Agung\Agunggram\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgungAgunggram5 extends Migration
{
    public function up()
    {
        Schema::table('agung_agunggram_', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('agung_agunggram_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}

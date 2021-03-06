<?php namespace Agung\Agunggram\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgungAgunggram6 extends Migration
{
    public function up()
    {
        Schema::table('agung_agunggram_', function($table)
        {
            $table->string('slug')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('agung_agunggram_', function($table)
        {
            $table->string('slug', 191)->nullable(false)->change();
        });
    }
}

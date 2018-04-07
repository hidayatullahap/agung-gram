<?php namespace Agung\Agunggram\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgungAgunggram extends Migration
{
    public function up()
    {
        Schema::table('agung_agunggram_', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
            $table->text('description')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('agung_agunggram_', function($table)
        {
            $table->increments('id')->unsigned()->change();
            $table->text('description')->nullable(false)->change();
        });
    }
}

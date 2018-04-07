<?php namespace Agung\Agunggram\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAgungAgunggram4 extends Migration
{
    public function up()
    {
        Schema::table('agung_agunggram_', function($table)
        {
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::table('agung_agunggram_', function($table)
        {
            $table->timestamp('updated_at')->nullable();
        });
    }
}

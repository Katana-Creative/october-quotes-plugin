<?php namespace Katana\Quotes\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKatanaQuotes extends Migration
{
    public function up()
    {
        Schema::create('katana_quotes_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('quote');
            $table->text('author');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('katana_quotes_');
    }
}

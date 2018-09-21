<?php namespace Octobro\Gamify\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateLevelLogsTable extends Migration
{
    public function up()
    {
        Schema::create('octobro_gamify_level_logs', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('octobro_gamify_level_logs');
    }
}

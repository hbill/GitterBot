<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMentionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentions', function(Blueprint $t) {
            $t->uuid('id')->unique()->primary();
            $t->uuid('user_id')->index();
            $t->uuid('user_target_id')->index();
            $t->uuid('message_id')->index();

            $t->unique(['user_id', 'user_target_id', 'message_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mentions');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoyaltiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loyalties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('txn');
            $table->string('channel_id');
            $table->integer('total_entry_amt');
            $table->string('network_id');
            $table->dateTime('r_cre_time');
            $table->string('txn_entry_status');
            $table->string('consumer_code');
            $table->string('corp_id');
            $table->string('txn_type');
            $table->integer('txn_point');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loyalties');
    }
}

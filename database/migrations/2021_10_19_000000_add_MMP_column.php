<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMMPColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sendgrid_webhook_events', function (Blueprint $table) {
            $table->boolean('sg_machine_open')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('sendgrid_webhook_events', function (Blueprint $table) {
        $table->dropColumn('sg_machine_open');
      });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableFieldsToEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('events', function (Blueprint $table) {
            //
            
$table->string('avatar')->nullable()->default('no')->change();
            $table->string('city')->nullable()->change();
            $table->string('started_at')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('max_attendees')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            //
            $table->string('avatar')->nullable(false)->change();
            $table->string('city')->nullable(false)->change();
            $table->string('started_at')->nullable(false)->change();
            $table->string('email')->nullable(false)->change();
            $table->string('max_attendees')->nullable(false)->change();
        });
    }
}

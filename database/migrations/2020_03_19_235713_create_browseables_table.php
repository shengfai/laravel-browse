<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrowseablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('browseables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->morphs('browseable');
            $table->unsignedTinyInteger('type')->default(1);
            $table->ipAddress('ip')->nullable();
            $table->string('user_agent', 1024)->nullable();
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
        Schema::dropIfExists('browseables');
    }
}

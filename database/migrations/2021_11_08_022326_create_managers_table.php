<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('name', 30);
            $table->string('image')->nullable();
            $table->string('email')->unique();
            $table->bigInteger('position_id');
            $table->bigInteger('division_id');
            $table->bigInteger('follow_id')->nullable();
            $table->bigInteger('role');
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('position_id')->references('id')->on('positions');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->foreign('follow_id')->references('id')->on('follows');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('managers');
    }
}

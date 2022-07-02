<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteTableFromDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('hobbies');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('hobbies', function (Blueprint $table) {
            $table->id();
            $table->string('hobby');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();

            $table->softDeletes();
        });
    }
}
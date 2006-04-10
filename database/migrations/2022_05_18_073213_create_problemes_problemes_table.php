<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProblemesProblemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problemes_problemes', function (Blueprint $table) {
            $table->id();
            $table->text('description',100);
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('type_id')->constrained('types_types');
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
        Schema::dropIfExists('problemes_problemes');
    }
}

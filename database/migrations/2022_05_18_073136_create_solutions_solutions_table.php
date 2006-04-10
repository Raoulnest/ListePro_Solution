<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionsSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solutions_solutions', function (Blueprint $table) {
            $table->id();
            $table->text('description',100);
            $table->foreignId('respo_id')->constrained('responsables_responsables');
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
        Schema::dropIfExists('solutions_solutions');
    }
}

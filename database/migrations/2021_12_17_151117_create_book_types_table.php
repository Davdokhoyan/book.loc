<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_types', function (Blueprint $table) {
            $table->id();
//            $table->bigInteger('book_id')->unsigned();
            $table->bigInteger('type_id')->unsigned();
            $table->foreign('type_id')
                ->cascadeOnDelete()
                ->cascadeOnUpdate()
                ->on('types')
                ->references('id');
            $table->foreignId('book_id')
                ->constrained('books')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
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
        Schema::dropIfExists('book_types');
    }
}

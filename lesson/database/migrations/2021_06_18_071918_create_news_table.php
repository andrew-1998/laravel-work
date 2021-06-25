<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->constrained()->cascadeOnDelete();
            $table->string('title', 200);   //varchar(200)
            $table->string('author', 150)->nullable();
            $table->text('description')->nullable();
            $table->string('image', 255)->nullable();
            $table->enum('status', ['draft', 'published', 'blocked'])->default('draft');
            
            $table->timestamps();

            //$table->foreign(category_id)->on('categories')->references('id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}

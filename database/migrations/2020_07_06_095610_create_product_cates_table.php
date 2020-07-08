<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_cates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url');
            $table->string('title');
            $table->longText('seo_description');
            $table->string('seo_keyword');
            $table->string('avata');
            $table->boolean('display');
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
        Schema::dropIfExists('product_cates');
    }
}

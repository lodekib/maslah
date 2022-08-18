<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propertys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('property_name');
            $table->double('price');
            $table->float('size',8,2);
            $table->integer('bedrooms');
            $table->string('floor');
            $table->float('discount',4,2);
            $table->text('description');
            $table->text('amenities');
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
        Schema::table('propertys', function (Blueprint $table) {
            //
        });
    }
};

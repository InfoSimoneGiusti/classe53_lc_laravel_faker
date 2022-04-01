<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {

            $table->id();

            $table->string('reference_number', 20)->unique();
            $table->string('name', 50);
            $table->text('description')->nullable();
            $table->decimal('amount', 10, 2);
            $table->unsignedInteger('sm');
            $table->unsignedTinyInteger('rooms');

            $table->string('address', 100);
            $table->string('city', 30);
            $table->string('province', 30);
            $table->string('zip', 10);

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
        Schema::dropIfExists('houses');
    }
}

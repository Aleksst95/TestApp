<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'buildings',
            function (Blueprint $table) {
                $table->id();

                $table->string('name', 1000);
                $table->decimal('price', 8, 2);
                $table->smallInteger('count_bedrooms')->default(0);
                $table->smallInteger('count_bathrooms')->default(0);
                $table->smallInteger('count_storeys')->default(0);
                $table->smallInteger('count_garages')->default(0);

                $table->timestamps();
                $table->softDeletes();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buildings');
    }
}

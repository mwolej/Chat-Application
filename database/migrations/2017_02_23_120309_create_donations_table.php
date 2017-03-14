<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->decimal('quantity',50);
            $table->string('location_id',11);
            $table->string('donor_id',11);
            $table->string('description',128);
            $table->string('remarks',30);
            $table->string('blood_group',11);
            $table->string('donation_date',11);
            $table->string('created_by',30);
            $table->increments('id');
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
        Schema::dropIfExists('donations');
    }
}

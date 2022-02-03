<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangaymembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangaymembers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barangay_id');
            $table->text('name');
            $table->text('position');
            $table->text('designation');
            $table->integer('order_no');
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
        Schema::dropIfExists('barangaymembers');
    }
}

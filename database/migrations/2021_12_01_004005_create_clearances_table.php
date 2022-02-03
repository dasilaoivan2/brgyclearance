<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClearancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clearances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person_id');
            $table->text('or');
            $table->date('or_date');
            $table->text('ctc_no')->nullable();
            $table->date('ctc_issued')->nullable();
            $table->text('ctc_place_issued')->nullable();
            $table->text('purpose');
            $table->text('photo')->nullable();
            $table->foreignId('barangay_id');
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
        Schema::dropIfExists('clearances');
    }
}

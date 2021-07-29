<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDairasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dairas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wilaya_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('name_ar')->nullable();
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
        Schema::dropIfExists('dairas');
    }
}

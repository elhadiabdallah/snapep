<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEngagedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('engageds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->date('borned_at')->nullable();
            $table->foreignId('wilaya_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('daira_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('commune_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('type_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('language_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('number')->nullable();
            $table->string('national_number')->nullable();
            $table->string('primary_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('social_security_number')->nullable();

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
        Schema::dropIfExists('engageds');
    }
}

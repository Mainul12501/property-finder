<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id');
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('position');
            $table->string('nationality')->nullable();
            $table->string('languages');
            $table->text('location')->nullable();
            $table->text('about_agent');
            $table->string('image')->nullable();
            $table->string('license_number')->nullable();
            $table->string('experience_since')->nullable();
            $table->text('linkedin_profile_url')->nullable();
            $table->text('fb_profile_url')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->integer('hit_count')->default(0);
            $table->text('extra')->nullable();
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
        Schema::dropIfExists('agents');
    }
}

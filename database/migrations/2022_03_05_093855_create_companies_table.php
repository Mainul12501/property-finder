<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone_number');
            $table->string('email')->nullable();
            $table->string('big_logo_image')->nullable();
            $table->string('small_logo_image')->nullable();
            $table->string('head_office_area')->nullable();
            $table->string('head_office_city')->nullable();
            $table->string('head_office_state')->nullable();
            $table->string('orn')->nullable();
            $table->text('location')->nullable();
            $table->text('location_map_url')->nullable();
            $table->text('about_office')->nullable();
            $table->string('fb_url')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('companies');
    }
}

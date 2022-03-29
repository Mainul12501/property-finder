<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('searches', function (Blueprint $table) {
            $table->id();
            $table->string('search_text')->nullable();
            $table->bigInteger('property_ads_type_id')->nullable();
            $table->bigInteger('property_id')->nullable();
            $table->bigInteger('property_type_id')->nullable();
            $table->mediumInteger('bedrooms')->nullable();
            $table->mediumInteger('bathrooms')->nullable();
            $table->float('min_price', 10, 2)->nullable();
            $table->float('max_price', 10, 2)->nullable();
            $table->string('req_type')->default('buy')->comment('buy or rent');
            $table->string('property_size')->nullable();
            $table->tinyInteger('is_furnished')->default(1)->comment('1 => furnished & 0 => not furnished');
            $table->tinyInteger('is_completed')->default(1)->comment('1 => completed & 0 => not completed');
            $table->text('extra_content')->nullable();
            $table->integer('hit_count')->nullable();
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
        Schema::dropIfExists('searches');
    }
}

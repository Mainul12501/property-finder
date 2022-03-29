<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('company_id');
            $table->bigInteger('agent_id');
            $table->bigInteger('property_type_id');
            $table->bigInteger('property_ads_type_id');
            $table->bigInteger('property_promotion_type_id');
            $table->string('property_title');
            $table->string('property_size');
            $table->mediumInteger('bedrooms')->nullable();
            $table->mediumInteger('bathrooms')->nullable();
            $table->string('parking')->nullable();
            $table->float('property_price', 10, 2)->default(0);
            $table->integer('yearly_service_charge')->nullable();
            $table->integer('rent_charge_per_year')->nullable();
            $table->integer('property_interest_rate')->nullable();
            $table->string('location_area')->nullable();
            $table->string('location_city')->nullable();
            $table->string('location_country')->nullable();
            $table->tinyInteger('property_completion')->default(1)->comment('0 => not completed, 1=> completed');
            $table->tinyInteger('is_furnished')->default(1)->comment('0 => not furnished, 1=> furnished');
            $table->string('main_image')->nullable();
            $table->text('property_map_url')->nullable();
            $table->text('property_description')->nullable();
            $table->text('property_video_url')->nullable();
            $table->text('panoramic_360_view')->nullable();
            $table->integer('total_ordered')->default(0);
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->integer('hit_count')->default(0);
            $table->integer('updated_by')->nullable();
            $table->text('slug')->nullable();
            $table->text('extra')->nullable();
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
        Schema::dropIfExists('properties');
    }
}

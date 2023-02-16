<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('artist_type_id')
                ->comment("Artist's Type ID");

            $table->foreignId('region_id')
                ->comment("Artist's Region ID");

            $table->string('name')
                ->comment("Artist's Name");

            $table->string('profile_image')->nullable()
                ->comment("Artist's Image");

            $table->string('social_url')
                ->comment("Artist's Social Url");

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
        Schema::dropIfExists('artists');
    }
};

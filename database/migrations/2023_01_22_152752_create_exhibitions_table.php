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
        Schema::create('exhibitions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->comment('User Id');

            $table->string('title_mm')
                ->comment('Exhibition Myanmar Title');

            $table->string('title_en')
                ->comment('Exhibition English Title');

            $table->text('description_mm')
                ->comment('Exhibition Myanmar Description');

            $table->text('description_en')
                ->comment('Exhibition English Description');

            $table->date('exhibition_date')
                ->comment('Exhibition Date');

            $table->time('exhibition_start_time')
                ->comment('Exhibition Start Time');

            $table->string('cover_photo')
                ->comment("Exhibition's Cover Image ");

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
        Schema::dropIfExists('exhibitions');
    }
};

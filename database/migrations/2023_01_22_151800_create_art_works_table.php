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
        Schema::create('art_works', function (Blueprint $table) {
            $table->id();

            $table->foreignId('art_work_category_id')
                ->comment('Art Work Category ID');

            $table->foreignId('artist_id')
                ->comment('Artist ID');

            $table->string('title')
                ->comment('Artwork Title');

            $table->string('size')
                ->comment('Artwork Size');

            $table->string('medium')
                ->comment('Artwork Medium');

            $table->string('material')
                ->comment('Artwork Material');

            $table->decimal('price', 12, 2)
                ->comment('Artwork Price');

            $table->enum('currency', ['mmk', 'usd'])
                ->comment('Currency');

            $table->year('year')
                ->comment('Artwork Make Year');

            $table->text('description')
                ->comment('Artwork Description');

            $table->string('cover_photo')
                ->comment('Artwork Cover Image');

            $table->longText('images')
                ->comment('Artwork Other Images');

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
        Schema::dropIfExists('art_works');
    }
};

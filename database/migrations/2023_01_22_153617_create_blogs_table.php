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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->comment('User Id');

            $table->foreignId('blog_category_id')
                ->comment('Blog Category Id');

            $table->string('title_mm')
                ->comment('Myanmar Blog Title');

            $table->string('title_en')
                ->nullable()
                ->comment('English Blog Title');

            $table->text('description_mm')
                ->comment('Myanmar Blog Description');

            $table->text('description_en')
                ->nullable()
                ->comment('Myanmar Blog Description');

            $table->string('slug')
                ->unique()
                ->comment('Blog Slug');

            $table->string('cover_photo')
                ->comment('BLog Cover Photo');

            $table->string('images')
                ->nullable()
                ->comment('Blog Images');

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
        Schema::dropIfExists('blogs');
    }
};

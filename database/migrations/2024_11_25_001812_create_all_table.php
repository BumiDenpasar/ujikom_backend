<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create categories table
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->longText('img');
            $table->string('title');
            $table->timestamps();
        });

           // Create posts table
           Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->longText('img');
            $table->string('title');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->longText('body');
            $table->integer('read_time')->default(0);
            $table->bigInteger('views')->default(0);
            $table->timestamps();
        });

        // Create comments table
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('text');
            $table->foreignId('post_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

        // Create events table
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('short_desc');
            $table->text('desc');
            $table->string('img');
            $table->text('social_media')->nullable();
            $table->date('date');
            $table->time('time_start');
            $table->time('time_end');
            $table->timestamps();
        });

        // Create galleries table
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('desc');
            $table->string('img');
            $table->timestamps();
        });

        // Create gallery_images table
        Schema::create('gallery_images', function (Blueprint $table) {
            $table->id();
            $table->longText('image');
            $table->foreignId('gallery_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

        // Create images table
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->foreignId('post_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

        // Create love table
        Schema::create('love', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('post_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });

        // Create majors table
        Schema::create('majors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('desc');
            $table->string('link');
            $table->longText('img');
            $table->timestamps();
        });

     

        // Create post_category table
        Schema::create('post_category', function (Blueprint $table) {
            $table->foreignId('post_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });

        // Create socials table
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('link');
            $table->longText('img');
            $table->timestamps();
        });

        // Create statistics table
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('amount');
            $table->timestamps();
        });

        // Create texts table
        Schema::create('texts', function (Blueprint $table) {
            $table->id();
            $table->string('placement');
            $table->string('title');
            $table->string('subtitle');
            $table->longText('desc')->nullable();
            $table->string('cta')->nullable();
            $table->timestamps();
        });

        // Create visits table
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
        Schema::dropIfExists('texts');
        Schema::dropIfExists('statistics');
        Schema::dropIfExists('socials');
        Schema::dropIfExists('post_category');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('majors');
        Schema::dropIfExists('love');
        Schema::dropIfExists('images');
        Schema::dropIfExists('gallery_images');
        Schema::dropIfExists('galleries');
        Schema::dropIfExists('events');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('categories');
    }
};

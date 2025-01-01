<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to users table
            $table->string('title'); // Title of the post
            $table->text('content'); // Content of the post
            $table->timestamps(); // Created at and updated at timestamps
        });
    }*/
    public function up()
    {
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string('content');
        $table->integer('likes')->default(0);
        $table->timestamps();
    });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
}

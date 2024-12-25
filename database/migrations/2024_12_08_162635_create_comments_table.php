<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('username'); // Comment text
            $table->text('comment'); // Comment text
            $table->unsignedBigInteger('product_id'); // Foreign key to products table
            $table->timestamps();
            // Add foreign key constraint
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->string('status')->default('0');
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('isbn', 13)->unique();  // Set ISBN length to 13 and make it unique
        $table->string('title');
        $table->string('author');
        $table->text('description')->nullable();  // Allow description to be null
        $table->date('date_published');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

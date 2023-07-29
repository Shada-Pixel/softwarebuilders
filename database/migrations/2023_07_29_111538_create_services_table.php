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
        Schema::create('services', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('icon')->nullable();
            $table->string('cover');
            $table->longtext('short_description')->nullable();
            $table->longtext('description')->nullable();
            $table->tinyInteger('home_page')->default(1)->comment('1 => active, 2 => inactive');
            $table->tinyInteger('status')->default(1)->comment('1 => active, 2 => inactive');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
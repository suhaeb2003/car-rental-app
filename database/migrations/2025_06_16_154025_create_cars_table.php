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
        //`name`, `brand`, `model`, `year`, `total_car`,`price` `daily_rental_price`, `availability`, `car_status`, `image
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('brand');
            $table->string('model');
            $table->integer('year');
            $table->decimal('daily_rental_price', 8, 2);
            $table->enum('availability', ['available', 'unavailable']);
            $table->integer('total_car');
            $table->enum('car_status',['popular','normal','new'])->default('normal');
            $table->decimal('price', 8, 2);
            $table->string('image')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};

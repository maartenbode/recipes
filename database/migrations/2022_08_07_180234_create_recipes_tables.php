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
        Schema::create('recipes', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->foreignUuid('user_uuid')->constrained('users', 'uuid')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('title');
            $table->integer('duration_minutes')->nullable();
            $table->timestamps();
        });

        Schema::create('recipe_categories', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->foreignUuid('user_uuid')->constrained('users', 'uuid')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('title');
            $table->timestamps();
        });

        Schema::create('recipe_has_categories', function (Blueprint $table) {
            $table->foreignUuid('recipe_uuid')->constrained('recipes', 'uuid')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignUuid('category_uuid')->constrained('recipe_categories', 'uuid')->cascadeOnDelete()->cascadeOnUpdate();
        });

        Schema::create('recipe_ingredients', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->foreignUuid('recipe_uuid')->constrained('recipes', 'uuid')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('description');
            $table->float('unit_quantity', 10, 3);
            $table->enum('unit_type', ['gram', 'kg', 'liter', 'piece', 'teaspoon', 'tablespoon']);
            $table->timestamps();
        });

        Schema::create('recipe_steps', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->foreignUuid('recipe_uuid')->constrained('recipes', 'uuid')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('description');
            $table->integer('order_index')->default(0);
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
        Schema::dropIfExists('recipes');
    }
};

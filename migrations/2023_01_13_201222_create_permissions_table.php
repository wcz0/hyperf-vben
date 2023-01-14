<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('path')->nullable();
            $table->string('name')->nullable();
            $table->string('redirect')->nullable();
            $table->string('icon')->nullable();
            $table->string('component')->nullable();
            $table->string('permission')->unique();
            $table->unsignedInteger('parent_id')->nullable();
            $table->unsignedInteger('_lft');
            $table->unsignedInteger('_rgt');
            $table->unsignedTinyInteger('affix')->default(0);
            $table->unsignedTinyInteger('sort')->default(0);
            $table->unsignedTinyInteger('type')->default(0);
            $table->unsignedTinyInteger('status')->default(1);
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
}

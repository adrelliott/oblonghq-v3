<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->string('name');
            $table->string('description')->nullable();
            // $table->string('title')->nullable();
            // $table->text('intro_page')->nullable();
            // $table->text('completion_page')->nullable();
            $table->boolean('is_template')->default(0);
            $table->foreignId('business_id')->nullable();
            $table->foreignId('tenant_id')->nullable();
            $table->timestamp('opens_at')->nullable();
            $table->timestamp('closes_at')->nullable();
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
        Schema::dropIfExists('surveys');
    }
}

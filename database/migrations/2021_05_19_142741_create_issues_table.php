<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->string('subject')->nullable();
            $table->text('description')->nullable();
            $table->boolean('status');
            $table->string('priority');
            $table->bigInteger('file_id');
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->foreignId('reporter_id')->references('id')->on('users');
            $table->foreignId('assigned_id')->references('id')->on('users');
            $table->foreignId('dashboard_id')->constrained();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('issues');
        Schema::enableForeignKeyConstraints();
    }
}

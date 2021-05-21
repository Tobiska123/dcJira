<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::disableForeignKeyConstraints();
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('user_name');
                $table->string('e-mail')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->dateTime('last_login')->nullable();
                $table->bigInteger('file_id');
                $table->foreignId('project_id')->constrained();
                $table->rememberToken();
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
        Schema::enableForeignKeyConstraints();
        Schema::dropIfExists('users');
        Schema::disableForeignKeyConstraints();
    }
}

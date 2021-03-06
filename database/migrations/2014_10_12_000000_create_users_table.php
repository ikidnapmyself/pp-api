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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->string('provider_name');
            $table->string('provider_id');
            $table->string('email')->nullable()->unique();
            $table->string('one_time_password')->nullable();
            $table->timestamp('password_expires_at')->nullable();
            $table->json('notify_via');
            $table->string('access_token');
            $table->string('refresh_token')->nullable();
            $table->json('profile');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->timestamps();

            $table->primary(['id']);
            $table->unique(['provider_name', 'provider_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

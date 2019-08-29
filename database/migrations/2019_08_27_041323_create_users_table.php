<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngiclix_users', function (Blueprint $table) {
            $table->bigIncrements('users_id');
            $table->string('users_name',60);
            $table->string('users_email',60)->unique();
            $table->string('users_password',60);
            $table->string('users_role',5);
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
        Schema::dropIfExists('ngiclix_users');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_users', function (Blueprint $table) {
            $table->integer('user_id')->primary();
            $table->integer('user_contact')->default(0);
            $table->string('user_username')->default('')->index('idx_uid');
            $table->string('user_password', 32)->default('')->index('idx_pwd');
            $table->integer('user_parent')->default(0)->index('idx_user_parent');
            $table->boolean('user_type')->default(0);
            $table->integer('user_company')->default(0);
            $table->integer('user_department')->default(0);
            $table->integer('user_owner')->default(0);
            $table->text('user_signature')->nullable();
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

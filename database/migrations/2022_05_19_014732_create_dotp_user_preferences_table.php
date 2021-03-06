<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpUserPreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_user_preferences', function (Blueprint $table) {
            $table->string('pref_user', 12)->default('');
            $table->string('pref_name', 72)->default('');
            $table->string('pref_value', 32)->default('');
            
            $table->index(['pref_user', 'pref_name'], 'pref_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_user_preferences');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->integer('permission_user')->default(0)->index('idx_puser');
            $table->string('permission_grant_on', 12)->default('');
            $table->integer('permission_item')->default(0);
            $table->integer('permission_value')->default(0)->index('idx_pvalue');

            $table->unique(['permission_grant_on', 'permission_item', 'permission_user'], 'idx_pgrant_on');
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
        Schema::dropIfExists('permissions');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_permissions', function (Blueprint $table) {
            $table->integer('permission_id')->primary();
            $table->integer('permission_user')->default(0)->index('idx_puser');
            $table->string('permission_grant_on', 12)->default('');
            $table->integer('permission_item')->default(0);
            $table->integer('permission_value')->default(0)->index('idx_pvalue');
            
            $table->unique(['permission_grant_on', 'permission_item', 'permission_user'], 'idx_pgrant_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_permissions');
    }
}

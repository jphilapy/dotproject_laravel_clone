<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpGaclAxoGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_gacl_axo_groups', function (Blueprint $table) {
            $table->integer('id')->default(0);
            $table->integer('parent_id')->default(0)->index('gacl_parent_id_axo_groups');
            $table->integer('lft')->default(0);
            $table->integer('rgt')->default(0);
            $table->string('name')->default('');
            $table->string('value', 80)->default('')->index('gacl_value_axo_groups');
            
            $table->primary(['id', 'value']);
            $table->index(['lft', 'rgt'], 'gacl_lft_rgt_axo_groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_gacl_axo_groups');
    }
}

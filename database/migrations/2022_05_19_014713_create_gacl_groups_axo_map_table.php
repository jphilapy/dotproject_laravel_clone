<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaclGroupsAxoMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gacl_groups_axo_map', function (Blueprint $table) {
            $table->integer('group_id')->default(0);
            $table->integer('axo_id')->default(0);

            $table->primary(['group_id', 'axo_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gacl_groups_axo_map');
    }
}

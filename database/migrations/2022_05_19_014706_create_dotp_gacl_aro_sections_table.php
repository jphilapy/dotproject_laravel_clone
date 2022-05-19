<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpGaclAroSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_gacl_aro_sections', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->string('value', 80)->default('')->unique('gacl_value_aro_sections');
            $table->integer('order_value')->default(0);
            $table->string('name', 230)->default('');
            $table->integer('hidden')->default(0)->index('gacl_hidden_aro_sections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_gacl_aro_sections');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaclAclTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gacl_acl', function (Blueprint $table) {
            $table->integer('id')->default(0)->primary();
            $table->string('section_value', 80)->default('system')->index('gacl_section_value_acl');
            $table->integer('allow')->default(0);
            $table->integer('enabled')->default(0)->index('gacl_enabled_acl');
            $table->longText('return_value')->nullable();
            $table->longText('note')->nullable();
            $table->integer('updated_date')->default(0)->index('gacl_updated_date_acl');
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
        Schema::dropIfExists('gacl_acl');
    }
}

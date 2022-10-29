<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billingcode', function (Blueprint $table) {
            $table->bigInteger('billingcode_id')->primary();
            $table->string('billingcode_name', 25)->default('');
            $table->float('billingcode_value')->default(0);
            $table->string('billingcode_desc')->default('');
            $table->integer('billingcode_status')->default(0);
            $table->bigInteger('company_id')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billingcode');
    }
}

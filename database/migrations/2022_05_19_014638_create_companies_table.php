<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->integer('company_id')->primary();
            $table->integer('company_module')->default(0);
            $table->string('company_name', 100)->default('');
            $table->string('company_phone1', 30)->default('');
            $table->string('company_phone2', 30)->default('');
            $table->string('company_fax', 30)->default('');
            $table->string('company_address1', 50)->default('');
            $table->string('company_address2', 50)->default('');
            $table->string('company_city', 30)->default('');
            $table->string('company_state', 30)->default('');
            $table->string('company_zip', 11)->default('');
            $table->string('company_primary_url')->default('');
            $table->integer('company_owner')->default(0)->index('idx_cpy1');
            $table->text('company_description')->nullable();
            $table->integer('company_type')->default(0);
            $table->string('company_email')->nullable();
            $table->longText('company_custom')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDotpProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotp_projects', function (Blueprint $table) {
            $table->integer('project_id')->primary();
            $table->integer('project_company')->default(0)->index('idx_proj1');
            $table->integer('project_company_internal')->default(0);
            $table->integer('project_department')->default(0);
            $table->string('project_name')->nullable();
            $table->string('project_short_name', 10)->nullable()->index('project_short_name');
            $table->integer('project_owner')->default(0)->index('idx_project_owner');
            $table->string('project_url')->nullable();
            $table->string('project_demo_url')->nullable();
            $table->dateTime('project_start_date')->nullable()->index('idx_sdate');
            $table->dateTime('project_end_date')->nullable()->index('idx_edate');
            $table->integer('project_status')->default(0);
            $table->boolean('project_percent_complete')->default(0);
            $table->string('project_color_identifier', 7)->default('#eeeeee');
            $table->text('project_description')->nullable();
            $table->decimal('project_target_budget', 10, 2)->default(0.00);
            $table->decimal('project_actual_budget', 10, 2)->default(0.00);
            $table->integer('project_creator')->default(0);
            $table->unsignedTinyInteger('project_private')->default(0);
            $table->char('project_departments', 100)->nullable();
            $table->char('project_contacts', 100)->nullable();
            $table->boolean('project_priority')->default(0);
            $table->smallInteger('project_type')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dotp_projects');
    }
}

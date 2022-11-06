<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->morphs('contact');
            $table->string('contact_first_name', 30)->nullable();
            $table->string('contact_last_name', 30)->nullable();
            $table->string('contact_order_by', 30)->default('')->index('idx_oby');
            $table->string('contact_title', 50)->nullable();
            $table->date('contact_birthday')->nullable();
            $table->string('contact_job')->nullable();
            $table->string('contact_company', 100)->default('')->index('idx_co');
            $table->string('contact_department')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_email2')->nullable();
            $table->string('contact_url')->nullable();
            $table->string('contact_phone', 30)->nullable();
            $table->string('contact_phone2', 30)->nullable();
            $table->string('contact_fax', 30)->nullable();
            $table->string('contact_mobile', 30)->nullable();
            $table->string('contact_address1', 60)->nullable();
            $table->string('contact_address2', 60)->nullable();
            $table->string('contact_city', 30)->nullable();
            $table->string('contact_state', 30)->nullable();
            $table->string('contact_zip', 11)->nullable();
            $table->string('contact_country', 30)->nullable();
            $table->string('contact_jabber')->nullable();
            $table->string('contact_icq', 20)->nullable();
            $table->string('contact_msn')->nullable();
            $table->string('contact_yahoo')->nullable();
            $table->string('contact_aol', 30)->nullable();
            $table->text('contact_notes')->nullable();
            $table->integer('contact_project')->default(0)->index('idx_prp');
            $table->string('contact_icon', 20)->default('obj/contact');
            $table->unsignedInteger('contact_owner')->default(0);
            $table->unsignedTinyInteger('contact_private')->default(0);

            $table->primary(['contact_id']);
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
        Schema::dropIfExists('contacts');
    }
}

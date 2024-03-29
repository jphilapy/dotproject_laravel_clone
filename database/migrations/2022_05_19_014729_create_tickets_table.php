<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->integer('ticket_company')->default(0);
            $table->integer('ticket_project')->default(0);
            $table->string('author', 100)->default('');
            $table->string('recipient', 100)->default('');
            $table->string('subject', 100)->default('');
            $table->unsignedTinyInteger('attachment')->default(0);
            $table->unsignedInteger('timestamp')->default(0);
            $table->string('type', 15)->default('')->index('type');
            $table->unsignedInteger('assignment')->default(0);
            $table->unsignedInteger('parent')->default(0)->index('parent');
            $table->unsignedInteger('activity')->default(0);
            $table->unsignedTinyInteger('priority')->default(1);
            $table->string('cc')->default('');
            $table->text('body');
            $table->text('signature')->nullable();
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
        Schema::dropIfExists('tickets');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum_visits', function (Blueprint $table) {
            $table->integer('visit_user')->default(0);
            $table->integer('visit_forum')->default(0);
            $table->integer('visit_message')->default(0);
            $table->timestamp('visit_date')->nullable();

            $table->index(['visit_user', 'visit_forum', 'visit_message'], 'idx_fv');
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
        Schema::dropIfExists('forum_visits');
    }
}

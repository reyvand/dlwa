<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngiclix_contacts', function (Blueprint $table) {
            $table->bigIncrements('contacts_id');
            $table->string('contacts_name');
            $table->string('contacts_email');
            $table->text('contacts_message');
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
        Schema::dropIfExists('ngiclix_contacts');
    }
}

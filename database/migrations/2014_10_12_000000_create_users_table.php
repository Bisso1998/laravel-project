<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('items');

        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('itemId');
            $table->string('itemName');
            $table->string('itemImage');
            $table->string('itemPrice');
            $table->string('itemDescription');
            $table->string('itemType')->default('cat');
            $table->string('isSelected')->default('0');
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
        Schema::dropIfExists('items');
    }
}




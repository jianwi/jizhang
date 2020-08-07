<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelsRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId("item_id");
            $table->foreignId("product_id");
            $table->integer("quantity");
            $table->decimal("price",10,2);
            $table->decimal("money",10,2);
            $table->foreignId("user_id");
            $table->string("contacts");
            $table->string("phone_number");
            $table->string("extra");
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
        Schema::dropIfExists('models_records');
    }
}

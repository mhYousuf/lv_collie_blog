<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('website_name');
            $table->string('phone');
            $table->string('email');
            $table->string('logo');
            $table->string('footer_logo');
            $table->string('address');
            $table->string('copy_name');
            $table->string('copy_link');
            $table->string('copy_year');
            $table->longText('footer_description');
            $table->integer('status')->comment('0 = Inactive, 1 = Active');

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('basic');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('access_code')->unique();
            $table->string('role');
            $table->string('name');
            $table->string('facebook_id')->nullable();
            $table->string('google_id')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->integer('nid')->nullable();
            $table->string('image');
            $table->string('birth_date');
            $table->string('gender');
            $table->string('username')->unique()->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->string('verify_token');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->longText('shipping_address');
            $table->longText('billing_address');
            $table->integer('status')->comment('0 = Inactive, 1 = Active');
            $table->integer('online')->comment('0 = Inactive, 1 = Active');
            $table->timestamp('login_at')->nullable();
            $table->timestamp('logout_at')->nullable();
            
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_users');
    }
}

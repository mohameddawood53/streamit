<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::create("roles" , function (Blueprint $table){
//            $table->id();
//            $table->string("role");
//            $table->timestamps();
//        });
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('package')->nullable();
            $table->string("lang")->nullable();
            $table->date("pck_start")->nullable();
            $table->date("pck_end")->nullable();
            $table->string("img")->nullable();
//            $table->unsignedBigInteger("roles_id")->default("2");
            $table->rememberToken();
            $table->timestamps();
//            $table->foreignId("role_id")->references("id")->on("roles")->cascadeOnDelete();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

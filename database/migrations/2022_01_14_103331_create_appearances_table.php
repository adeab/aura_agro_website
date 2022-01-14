<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppearancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appearances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('showQurbaniService')->default(0);
            $table->string('logo')->nullable();
            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('phone_number')->nullable();
            $table->mediumText('about_us')->nullable();
            $table->mediumText('address')->nullable();
            $table->mediumText('welcome_message')->nullable();
            $table->string('welcome_header')->nullable();
            $table->mediumText('team_message')->nullable();
            $table->string('team_header')->nullable();
            $table->string('cattle_menu_text')->nullable();

            $table->string('service1')->nullable();
            $table->string('service1_image')->nullable();
            $table->mediumText('service1_detail')->nullable();

            $table->string('service2')->nullable();
            $table->string('service2_image')->nullable();
            $table->mediumText('service2_detail')->nullable();

            $table->string('service3')->nullable();
            $table->string('service3_image')->nullable();
            $table->mediumText('service3_detail')->nullable();

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
        Schema::dropIfExists('appearances');
    }
}

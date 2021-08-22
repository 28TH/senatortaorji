<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('app_no')->unique();
            $table->string('surname');
            $table->string('firstname');
            $table->string('othername')->nullable();
            $table->string('address');
            $table->string('email')->nullable();
            $table->string('phone', 15);
            $table->string('alt_phone', 15)->nullable();
            $table->string('state')->default('Abia');
            $table->string('lga');
            $table->string('university');
            $table->string('major');
            $table->string('social_media_url')->nullable();
            $table->string('passport');
            $table->string('admission_letter');
            $table->string('idcard');
            $table->string('lga_doc');
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
        Schema::dropIfExists('applications');
    }
}

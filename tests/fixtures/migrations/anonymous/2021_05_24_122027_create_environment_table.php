<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration
{
    public function up()
    {
        Schema::create('environment', function (Blueprint $table) {
            $table->uuid('value');
        });
    }

    public function down()
    {
        Schema::dropIfExists('environment');
    }
};

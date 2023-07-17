<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description');
            $table->text('thumb')->nullable()->default(null);
            $table->string('price');
            $table->string('series');
            $table->dateTime('sale_date')->nullable()->default(null);
            $table->string('type')->nullable()->default(null);
            // $table->string('artists');
            // $table->string('writers');

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
        Schema::dropIfExists('comics');
    }
};

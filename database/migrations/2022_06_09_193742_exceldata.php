<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Exceldata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
    Schema::create('exceldata', function (Blueprint $table) {
        $table->increments('id');

        $table->string('cargono')->nullable();  
        $table->string('cargotype')->nullable();  
        $table->string('cargosize')->nullable();  
        $table->string('weight')->nullable();  
     
        $table->string('remarks')->nullable();
        
        $table->string('wharfageusd')->nullable();
        
        $table->string('penaltyday')->nullable();

        $table->string('storageusd')->nullable();
        
        $table->string('electricityusd')->nullable();
        $table->string('listingusd')->nullable();
        $table->string('destuffing')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('exceldata');
}
}

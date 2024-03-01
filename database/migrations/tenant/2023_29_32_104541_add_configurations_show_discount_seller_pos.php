<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConfigurationsShowDiscountSellerPos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('configurations',function (Blueprint $table){
            $table->boolean('show_discount_seller_pos')->default(true);
        });

    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('configurations',function (Blueprint $table){
            $table->dropColumn('show_discount_seller_pos');
        });
      
       
    }
}

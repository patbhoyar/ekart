<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('userId')->unsigned();
                        $table->integer('prodId')->unsigned();
                        $table->integer('quantity')->unsigned()->default(0);
			$table->timestamps();
                        
                        $table->foreign('userId')->references('id')->on('users');
                        $table->foreign('prodId')->references('id')->on('products');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}

}

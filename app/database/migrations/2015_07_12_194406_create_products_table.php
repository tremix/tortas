<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('code');
			$table->string('name');
			$table->string('unit');
			$table->string('size');
			$table->decimal('cost', 25,2);
			$table->decimal('price', 25,2);
			$table->integer('alert_quantity');
			$table->string('image');
			$table->integer('category_id');
			$table->integer('quantity');
			$table->integer('tax_rate');
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
		Schema::drop('products');
	}

}

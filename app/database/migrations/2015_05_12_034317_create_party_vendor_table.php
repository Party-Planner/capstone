<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartyVendorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('party_vendor', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('party_id')->unsigned();
			$table->foreign('party_id')->references('id')->on('parties');
			$table->integer('vendor_id')->unsigned();
			$table->foreign('vendor_id')->references('id')->on('vendors');
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
		Schema::drop('party_vendor');
	}

}
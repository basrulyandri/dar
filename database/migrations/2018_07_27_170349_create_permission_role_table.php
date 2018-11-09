<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePermissionRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permission_role', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('role_id')->index('role_id');
			$table->unsignedInteger('permission_id')->index('permission_id');
			$table->timestamps();
			$table->index(['role_id','permission_id'], 'idgroup');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('permission_role');
	}

}

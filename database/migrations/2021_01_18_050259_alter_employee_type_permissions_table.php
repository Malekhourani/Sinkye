<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterEmployeeTypePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee_type_permissions', function (Blueprint $table) {
            $table->foreign('employee_type_id')
                  ->references('id')
                  ->on('employee_type');

            $table->foreign('permission_id')
                  ->references('id')
                  ->on('permission');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColsInUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('father_name')->after('lastname')->nullable();
            $table->string('cnic')->after('father_name')->nullable();
//            $table->string('email')->after('cnic')->nullable();
            $table->string('phone')->after('cnic')->nullable();
            $table->string('address')->after('phone')->nullable();
            $table->string('address2')->after('address')->nullable();
            $table->string('city')->after('address2')->nullable();
            $table->string('state')->after('city')->nullable();
            $table->string('dob')->after('state')->nullable();
            $table->string('religion')->after('dob')->nullable();
            $table->string('image')->after('religion')->nullable();
            $table->text('description')->after('image')->nullable();
            $table->string('gender')->after('description')->nullable();
            $table->tinyInteger('status')->after('gender')->default(0);
            $table->string('dod')->after('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('father_name');
            $table->dropColumn('cnic');
            $table->dropColumn('email');
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('address2');
            $table->dropColumn('city');
            $table->dropColumn('state');
            $table->dropColumn('dob');
            $table->dropColumn('religion');
            $table->dropColumn('pic');
            $table->dropColumn('description');
            $table->dropColumn('gender');
            $table->dropColumn('status');
        });
    }
}

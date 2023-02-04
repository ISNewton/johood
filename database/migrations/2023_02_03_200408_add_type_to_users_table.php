<?php

use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //student
            $table->string('type')->nullable()->default(User::TYPE_STUDENT);
            $table->string('gender')->nullable();
            $table->string('first_phone')->nullable();
            $table->string('second_phone')->nullable();
            $table->string('address')->nullable();
            $table->string('personal_id')->nullable();
            //guarantor
            $table->string('guarantor_name')->nullable();
            $table->string('guarantor_personal_id')->nullable();
            $table->string('guarantor_job')->nullable();
            $table->string('guarantor_work_company')->nullable();
            $table->string('guarantor_work_address')->nullable();
            $table->string('guarantor_first_phone')->nullable();
            $table->string('guarantor_second_phone')->nullable();
            //housing
            $table->string('house_address')->nullable();
            $table->string('house_owner')->nullable();
            $table->string('house_owner_personal_id')->nullable();
            $table->string('house_owner_gender')->nullable();
            $table->string('house_owner_phone')->nullable();
            $table->string('house_number')->nullable();
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
            //
        });
    }
};

<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
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

        Schema::table('users', function (Blueprint $table) {
           $table->string('role')->default('0');
        });


        $users = [
            [ 'name' => 'admin',
             'email' => 'admin@admin.com',
             'password' => Hash::make('12345678'),
             'role'=>'1',
         ],
 
     ];

        foreach ($users as $key => $value) {
 
            $user = User::create($value);
      
          }

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

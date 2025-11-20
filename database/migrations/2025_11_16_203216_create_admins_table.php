<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

return new class extends Migration {
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->timestamps();
        });

        // Dummy default admin
        DB::table('admins')->insert([
            'username' => 'admin',
            'password' => Hash::make('123456')
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('admins');
    }
};

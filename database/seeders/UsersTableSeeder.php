<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() === 0) {
            // Add default User 
            $user = new User();
            $user->name = 'Admin';
            $user->email = 'admin@admin.com';
            $user->staffno = 'A1';
            $user->icno = '000807121779';
            $user->location = 'HQ';
            $user->phone='999';
            $user->password = bcrypt('password');
            $user->role_id = 1;
            $user->save();
            // Add Default user
        }
    }
}

/*              $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->string('staffno')->nullable();
                $table->string('location')->nullable();
                $table->string('phone')->nullable();
                $table->string('avatar')->nullable();
                $table->foreignId('role_id')->constrained('user_roles');
                $table->boolean('status')->default(true);
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
                $table->timestamp('email_verified_at')->nullable(); */
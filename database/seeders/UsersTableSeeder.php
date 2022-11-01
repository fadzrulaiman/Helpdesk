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
            $user->location_id = 23;
            $user->department_id = 27;
            $user->phone='999';
            $user->password = bcrypt('password');
            $user->role_id = 1;
            $user->save();
            // Add Default user
            $user = new User();
            $user->name = 'User';
            $user->email = 'user@user.com';
            $user->staffno = 'U1';
            $user->icno = '000807121779';
            $user->location_id = 23;
            $user->department_id = 27;
            $user->phone='999';
            $user->password = bcrypt('password');
            $user->role_id = 2;
            $user->save();
            // Add Default Customer
            $user = new User();
            $user->name = 'Customer';
            $user->email = 'customer@customer.com';
            $user->staffno = 'C1';
            $user->icno = '000807121779';
            $user->location_id = 23;
            $user->department_id = 27;
            $user->phone='999';
            $user->password = bcrypt('password');
            $user->role_id = 3;
            $user->save();
            // Add Default Supervisor
            $user = new User();
            $user->name = 'Supervisor';
            $user->email = 'supervisor@supervisor.com';
            $user->staffno = 'S1';
            $user->icno = '000807121779';
            $user->location_id = 23;
            $user->department_id = 27;
            $user->phone='999';
            $user->password = bcrypt('password');
            $user->role_id = 4;
            $user->save();
            // Add Default ICT Personnel
            $user = new User();
            $user->name = 'ICT Personnel';
            $user->email = 'ict@ict.com';
            $user->staffno = 'ICT1';
            $user->icno = '000807121779';
            $user->location_id = 23;
            $user->department_id = 27;
            $user->phone='999';
            $user->password = bcrypt('password');
            $user->role_id = 5;
            $user->save();
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
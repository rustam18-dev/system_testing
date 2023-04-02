<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('slug','admin')->first();
        $operator = Role::where('slug', 'operator')->first();
        $teacher = Role::where('slug', 'teacher')->first();
        $student = Role::where('slug', 'student')->first();



//        $createTasks = Permission::where('slug','create-tasks')->first();
//        $manageUsers = Permission::where('slug','manage-users')->first();
//        $manageUsers_1 = Permission::where('slug','manage-users1')->first();


        $user1 = new User();
        $user1->name = 'Administaror';
        $user1->fio = 'Administaror';
        $user1->email = 'admin@gmail.com';
        $user1->password = bcrypt('secret');
        $user1->save();
        $user1->roles()->attach($admin);
//        $user1->permissions()->attach($createTasks);


        $user2 = new User();
        $user2->name = 'Operator';
        $user2->fio = 'Operator';
        $user2->email = 'operator@gamil.com';
        $user2->password = bcrypt('secret');
        $user2->save();
        $user2->roles()->attach($operator);
//        $user2->permissions()->attach($manageUsers);

        $user3 = new User();
        $user3->name = 'Teacher';
        $user3->fio = 'Teacher';
        $user3->email = 'teacher@gmail.com';
        $user3->password = bcrypt('secret');
        $user3->save();
        $user3->roles()->attach($teacher);
//        $user3->permissions()->attach($manageUsers_1);

        $user4 = new User();
        $user4->name = 'Student';
        $user4->fio = 'Student';
        $user4->email = 'student@gmail.com';
        $user4->password = bcrypt('secret');
        $user4->save();
        $user4->roles()->attach($student);
//        $user4->permissions()->attach($manageUsers);
    }
}

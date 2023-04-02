<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = new Role();
        $admin->name = 'SuperAdmin';
        $admin->slug = 'admin';
        $admin->save();

        $oper = new Role();
        $oper->name = 'Operator';
        $oper->slug = 'operator';
        $oper->save();

        $teacher =new  Role();
        $teacher->name='Teacher';
        $teacher->slug='teacher';
        $teacher->save();

        $student =new  Role();
        $student->name='Student';
        $student->slug='student';
        $student->save();





    }
}

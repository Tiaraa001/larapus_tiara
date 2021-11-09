<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
Use App\Models\User;
Use App\Models\Role;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role admian
        $adminRole = new Role;
        $adminRole ->name = "admin";
        $adminRole ->display_name = "Admin Larapus";
        $adminRole ->save();

        //membuat role member
        $memberRole = new Role;
        $memberRole ->name = "member";
        $memberRole ->display_name = "Member Larapus";
        $memberRole ->save();

        //membuat sample admin
        $admin = new User;
        $admin->name ="Admin Larapus";
        $admin->email ="admin@gmail.com";
        $admin->password = bcrypt("rahasia");
        $admin->save();
        $admin->attachRole($adminRole);

        //membuat sample data
        $member = new User;
        $member->name ="Member Larapus";
        $member->email ="member@gmail.com";
        $member->password = bcrypt("rahasia");
        $member->save();
        $member->attachRole($memberRole);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Tanvir Sourov';
        $user->email = 'tanvir@technolive.co';
        $user->image_url = '1.png';
        $user->role = 1;
        $user->password = bcrypt('tanvir@123');
        $user->save();

        $user = new User();
        $user->name = 'Asif Ahmed Tonmoy';
        $user->email = 'tonmoy@technolive.co';
        $user->image_url = '2.png';
        $user->role = 1;
        $user->password = bcrypt('tonmoy@123');
        $user->save();

        $user = new User();
        $user->name = 'Nazrul Islam';
        $user->email = 'nazrul@ugc.com';
        $user->image_url = '3.png';
        $user->role = 1;
        $user->password = bcrypt('nazrul@123');
        $user->save();

    }
}

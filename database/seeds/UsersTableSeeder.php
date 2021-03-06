<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->toArray());

        $user = User::find(1);
        $user->name = 'lxz';
        $user->email = '18686852337@163.com';
        $user->password = bcrypt('lxz_19920107');
        $user->is_admin = true;
        $user->save();
    }
}

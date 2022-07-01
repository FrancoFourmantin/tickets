<?php

namespace Database\Seeders;

use App\Models\User;
use Silber\Bouncer\BouncerFacade as Bouncer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Franco Fourmantin',
            'email' => 'francofourmantin@gmail.com',
            'password' => Hash::make('password'),
        ]);


	    $role = Bouncer::role()->create(['name' => 'super-admin']);

        Bouncer::allow($role)->toManage(\Silber\Bouncer\Database\Role::class);
        Bouncer::allow($role)->toManage(\Silber\Bouncer\Database\Ability::class);

        User::where('email' , 'francofourmantin@gmail.com')->first()->assign($role);
    }
}

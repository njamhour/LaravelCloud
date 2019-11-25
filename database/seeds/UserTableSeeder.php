//app/database/seeds/UserTableSeeder.php
//use Illuminate\Support\Facades\DB;

<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'Nicholas Jamhour',
        'username' => 'njamhour',
        'email'    => 'njjamhour@hotmail.com',
        'password' => Hash::make('teste123'),
    ));
}

}
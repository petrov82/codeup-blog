<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'admin@codeup.com';
        $user->password = 'adminPass123!';
        $user->first_name = 'Peter';
		$user->last_name = 'Rhodes';
		$user->user_name = 'petrov82';
        $user->role_id = '1';
        $user->save();

        $user = new User();
        $user->email = 'reader@codeup.com';
        $user->password = 'readerPass123!';
        $user->first_name = 'Larry';
        $user->last_name = 'Lyman';
        $user->user_name = 'larryboy66';
        $user->role_id = '2';
        $user->save();

        $user = new User();
        $user->email = 'author@codeup.com';
        $user->password = 'authorPass123!';
        $user->first_name = 'Jacob';
        $user->last_name = 'Lyman';
        $user->user_name = 'yackov52';
        $user->role_id = '3';
        $user->save();
    }

}




?>

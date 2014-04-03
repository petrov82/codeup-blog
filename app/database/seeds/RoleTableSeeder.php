<?php

class RoleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        $role = new Role();
        $role->role = 'Administrator';
        $role->save();

        $role = new Role();
        $role->role = 'Author';
        $role->save();

        $role = new Role();
        $role->role = 'Contributor';
        $role->save();
    }

}




?>

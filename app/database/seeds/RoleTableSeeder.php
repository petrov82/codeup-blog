<?php

class RoleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        $role = new Role();
        $role->id   = '1';
        $role->role = 'Administrator';
        $role->save();

        $role = new Role();
        $role->role = 'Author';
        $role->id   = '2';
        $role->save();

        $role = new Role();
        $role->id   = '3';
        $role->role = 'Contributor';
        $role->save();
    }

}




?>

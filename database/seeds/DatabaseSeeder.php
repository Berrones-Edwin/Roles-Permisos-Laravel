<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->truncateTable([
            'permissions',
            'products',
            'users',
            'roles'
        ]);

        $this->call(PermissionsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(RolesSeeder::class);
    }

    public function truncateTable(array $tables)        
    {
       DB::statement('SET FOREIGN_KEY_CHECKS=0;');

       foreach($tables as $table){
            DB::table($table)->truncate();
       }

       DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}

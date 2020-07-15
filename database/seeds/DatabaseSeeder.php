<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

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
            User::class
        ]);
        $this->call(UserSeeder::class);
    }

    protected function truncateTable($models): void
    {
        Schema::disableForeignKeyConstraints();
        foreach ($models as $model)
        {
            $model::truncate();
        }
        Schema::enableForeignKeyConstraints();
    }
}

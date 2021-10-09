<?php

namespace Database\Seeders;

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
        $path = 'database/sql/posts.sql';
        $sql = file_get_contents($path);
        DB::unprepared($sql);
    }
}

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
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(NovaPageManagerPagesTableSeeder::class);
        $this->call(MenuMenusTableSeeder::class);
        $this->call(MenuMenuItemsTableSeeder::class);
        $this->call(PeopleTypesTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(InstitutesTableSeeder::class);
        $this->call(MnqfsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(FilesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(QuickLinksTableSeeder::class);
    }
}

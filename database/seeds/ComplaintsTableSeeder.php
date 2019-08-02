<?php

use Illuminate\Database\Seeder;

class ComplaintsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Schema::disableForeignKeyConstraints();
        DB::table('complaints')->truncate();
        factory('App\Complaint')->times(100)->create();
        Schema::enableForeignKeyConstraints();
    }
}

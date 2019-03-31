<?php

use Illuminate\Database\Seeder;

class ChurchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('churches')->insert([
            'name' => 'EHCC Lagos',
            'description' => 'Enthronement House Christian Center',
            'founder' => 'Revd. Deji Olabode',
            'email' => 'enthronmentassembly@gmail.com',
            'password' => bcrypt('password19!'),
        ]);
    }
}

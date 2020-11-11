<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            'id'=>'123',
            'done'=>true,
            'content' => 'laravel'
        ]);
    }
}

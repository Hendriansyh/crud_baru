<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts=[
        ['title'=>'Tips Cepat Nikah','content'=>'Lorem Ipsum'],
        ['title'=>'Haruskah Menunda Nikah?','content'=>'Lorem Ipsum'],
        ['title'=>'Membangun visi misi keluarga','content'=>'Lorem Ipsum']

        ];
        DB::table('posts')->insert($posts);
    }
}

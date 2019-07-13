<?php

use App\Comment;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comment = new Comment();
        $comment->comment = "bai viet hay qua ";
        $comment->post_id  = 1;
        $comment->save();
    }
}

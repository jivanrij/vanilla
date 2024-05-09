<?php

namespace App\Console\Commands;

use App\Models\Activity;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Console\Command;

class TestItCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test-it';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test code';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Tag::factory()->create();
        Post::factory()->create();
        Activity::factory()->create();

        $post = Post::find(1);
        $tag = Tag::find(1);
        $post->tags()->attach($tag);

        $activity = Activity::find(1);
        $tags = $activity->tags;
    }
}

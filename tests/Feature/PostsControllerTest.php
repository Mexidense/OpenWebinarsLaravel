<?php

namespace Tests\Feature;

use App\Post;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostsControllerTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * Check if create post controller works well
     *
     * @return assert true or false
     */
    public function testStorePost()
    {
        $data = [
            'title' => 'Random title',
            'body' => 'En un lugar de la mancha de cuyo nombre no quiero acordarme',
        ];

        $response = $this->call('POST', 'post/store', $data);

        $this->assertEquals(6, count(Post::all()));

        $newPost = Post::find(6);
        $this->assertEquals($data['title'], $newPost->title);
        $this->assertEquals($data['body'], $newPost->body);

    }

    /**
     * Check if delete post controller works well
     */
    public function testDeletePost(){
        $postId = 1;
        $this->call('GET', 'post/delete/' . $postId);
        $this->assertEquals(4, count(Post::all()));
    }
}

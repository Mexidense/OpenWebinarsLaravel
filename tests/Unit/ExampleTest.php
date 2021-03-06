<?php

namespace Tests\Unit;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->get('/')->assertSee('OpenWebinars Laravel');
    }

    public function testSinglePostPageExist(){
        $this->get('/post/1')->assertSee('Content of the post #0');
    }
}

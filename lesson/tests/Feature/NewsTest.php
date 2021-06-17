<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;     // Пришлось добавить, чтобы читались константы, автоматически строка не добавляется!
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_news_index()
    {
        $response = $this->get('/');

        $response->assertStatus(Response::HTTP_OK);
    }
    public function test_news_create()
    {
        $response = $this->get(route('news.create'));

        $response->assertStatus(Response::HTTP_OK);
    }
    public function test_news_store()
    {   
        $data=[
            'title'=>'Тестовый заголовок',
            'brief'=>'суть новости для теста',
            'description'=>'Описание новости'
        ];
        $response = $this->post(route('news.store'), $data);

        $response->assertJson($data);
    }
    public function test_admin_categories()
    {
        $response = $this->get(route('admin.news.create'));

        $response->assertStatus(Response::HTTP_OK);
    }
    public function test_admin_news_show()
    {
        $response = $this->get(route('admin.news.show'));

        $response->assertStatus(Response::HTTP_OK);
    }
}

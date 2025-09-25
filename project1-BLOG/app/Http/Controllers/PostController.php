<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index(){
        $data_of_posts = [
            ['id' => 1, 'desc'=> ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, mollitia deleniti reiciendis hic voluptatibus tempore distinctio libero ad beatae voluptatum maiores praesentium excepturi ipsum maxime eos earum sequi nam esse!','title' => 'First Post', 'posted_by' => 'Fimo', 'created_at' => '2024-06-01'],
            ['id' => 2, 'desc'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, mollitia deleniti reiciendis hic voluptatibus tempore distinctio libero ad beatae voluptatum maiores praesentium excepturi ipsum maxime eos earum sequi nam esse!','title' => 'Second Post', 'posted_by' => 'Alice', 'created_at' => '2024-06-02'],
            ['id' => 3,'desc'=> ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, mollitia deleniti reiciendis hic voluptatibus tempore distinctio libero ad beatae voluptatum maiores praesentium excepturi ipsum maxime eos earum sequi nam esse!', 'title' => 'Third Post', 'posted_by' => 'Bob', 'created_at' => '2024-06-03'],
        ];
        return view('posts.index', ['data_of_posts' => $data_of_posts]);
    }
    public function show($post_id){
        $post = ['id' => 1, 'desc'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, mollitia deleniti reiciendis hic voluptatibus tempore distinctio libero ad beatae voluptatum maiores praesentium excepturi ipsum maxime eos earum sequi nam esse!Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, mollitia deleniti reiciendis hic voluptatibus tempore distinctio libero ad beatae voluptatum maiores praesentium excepturi ipsum maxime eos earum sequi nam esse!Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, mollitia deleniti reiciendis hic voluptatibus tempore distinctio libero ad beatae voluptatum maiores praesentium excepturi ipsum maxime eos earum sequi nam esse!Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, mollitia deleniti reiciendis hic voluptatibus tempore distinctio libero ad beatae voluptatum maiores praesentium excepturi ipsum maxime eos earum sequi nam esse!Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, mollitia deleniti reiciendis hic voluptatibus tempore distinctio libero ad beatae voluptatum maiores praesentium excepturi ipsum maxime eos earum sequi nam esse!','title' => 'first_post', 'posted_by' => 'Fimo', 'created_at' => '2024-06-01'];
      return view('posts.show',['post'=>$post]);
    }
}

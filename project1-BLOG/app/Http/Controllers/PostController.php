<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{

    public function index()
    {
        $postsFromDB = Post::all();
        // dd($postsFromDB);
        // $posts = [
        //     ['id' => 1, 'desc'=> ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, mollitia deleniti reiciendis hic voluptatibus tempore distinctio libero ad beatae voluptatum maiores praesentium excepturi ipsum maxime eos earum sequi nam esse!','title' => 'First Post', 'posted_by' => 'Fimo', 'created_at' => '2024-06-01'],
        //     ['id' => 2, 'desc'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, mollitia deleniti reiciendis hic voluptatibus tempore distinctio libero ad beatae voluptatum maiores praesentium excepturi ipsum maxime eos earum sequi nam esse!','title' => 'Second Post', 'posted_by' => 'Alice', 'created_at' => '2024-06-02'],
        //     ['id' => 3,'desc'=> ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, mollitia deleniti reiciendis hic voluptatibus tempore distinctio libero ad beatae voluptatum maiores praesentium excepturi ipsum maxime eos earum sequi nam esse!', 'title' => 'Third Post', 'posted_by' => 'Bob', 'created_at' => '2024-06-03'],
        // ];
        $users=User::all();
        // dd($users[0]->posts);

        return view('posts.index', ['posts' => $postsFromDB,'users'=>$users]);
    }
    public function show(Post $post)//type hinting
    {

        // $post = Post::Find($post_id); //model Obj ()
        // $post = Post::where('id',$post_id)->first(); //builder Obj (singular item)
        // $post = Post::where('id',$post_id)->get(); //collection Obj (cause it come with plural item)
        // dd($post);
        // $post = ['id' => 1, 'desc'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, mollitia deleniti reiciendis hic voluptatibus tempore distinctio libero ad beatae voluptatum maiores praesentium excepturi ipsum maxime eos earum sequi nam esse!Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, mollitia deleniti reiciendis hic voluptatibus tempore distinctio libero ad beatae voluptatum maiores praesentium excepturi ipsum maxime eos earum sequi nam esse!Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, mollitia deleniti reiciendis hic voluptatibus tempore distinctio libero ad beatae voluptatum maiores praesentium excepturi ipsum maxime eos earum sequi nam esse!Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, mollitia deleniti reiciendis hic voluptatibus tempore distinctio libero ad beatae voluptatum maiores praesentium excepturi ipsum maxime eos earum sequi nam esse!Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, mollitia deleniti reiciendis hic voluptatibus tempore distinctio libero ad beatae voluptatum maiores praesentium excepturi ipsum maxime eos earum sequi nam esse!','title' => 'first_post', 'posted_by' => 'Fimo', 'created_at' => '2024-06-01'];
        // if(is_null($post)){
        //     return to_route('posts.index');
        // }
        // or i can use
        // $post = Post::FindOrFail($post_id);
        
        
        return view('posts.show', ['post' => $post]);
    }
    public function create()
    {
        $users = User::all();
        // dd($users);
        return view('posts.create', compact('users'));
    }
    public function store()
    {
        //Validation 
        request()->validate([
            'title'=>'required|min:5|max:100|unique:posts,title',
            'desc'=>'required|min:10',
            'created_by'=>'required|exists:users,id'
        ]);

        // $data = $_POST; php way and is not secur 
        $request = request()->all();
         // laravel way more secure
        // dd($request);
        //way1 to insert data
        // $post = new Post;
        // $post->title = $request['title'];
        // $post->desc = $request['desc'];
        // $post->save();

        //way2 to insert data
        $title = $request['title'];
        $desc = $request['desc'];
        $created_by_id = $request['created_by']; 
        Post::create([
          'title'=>$title,
           'desc'=>$desc,
           'user_id'=> $created_by_id
        ]);
        return to_route('posts.index');
    }
    
    public function edit(Post $post)
    {
        $users = User::all();
        // dd($post);
        return view('posts.edit',['users'=>$users,'post'=>$post]);
    }

    public function update($post_id)
    {
        
        request()->validate([
            'title'=>'required|min:5|max:100|unique:posts,title,'.$post_id,
            'desc'=>'required|min:10',
            'edit_by'=>'required|exists:users,id'
        ]); 
        $request = request()->all();
        // way1
        // $post = Post::find($post_id);
        // $post->title = $request["title"];
        // $post->desc = $request["desc"];
        // $post->save();

        //way2
        $post=Post::find($post_id);
        $post->update([
        'title'=>$request["title"],
        'desc' => $request["desc"],
        'user_id'=>$request["edit_by"]
        ]);
        return to_route('posts.show', $post_id);
    }
    public function destroy(Post $post)
    {
        // return "destroy Action";
        // $post=Post::find($post);

        
        $post->delete();
        return to_route('posts.index');
    }
}

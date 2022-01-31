<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = [
            ['title' => 'Learn PHP ', 'posted_by'=> 'Ahmed', 'created_at' => '2022-01-20'],
            ['title' => 'Solid principles Post', 'posted_by'=> 'Mohamed', 'created_at' => '2022-01-20'],
            ['title' => 'design pattern', 'posted_by'=> 'Ali', 'created_at' => '2022-01-20'],
        ];

        return view('posts.index', [
            'allPosts' => $allPosts
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        // dd('test'); any logic after dd won't be executed
        //the logic to store post in the db
        return redirect()->route('posts.index');
    }

    public function show()
    {
        //query in db select * from posts where id = $postId
        return view('posts.edit');
    }
    public function edit()
    {
        //query in db select * from posts where id = $postId
        return view('posts.edit');
    }

    
}
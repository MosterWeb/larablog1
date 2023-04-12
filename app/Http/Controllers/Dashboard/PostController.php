<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()  
    {
        //
       return view("dashboard.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $categories = Category::select('id', 'title')->get();
        $categories = Category::pluck("id", "title");
        return view("dashboard.create", compact("categories"));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //
       
    //    echo $request->all();
    // $data = $request->except('_token');
    
    // $data = $request->validated();
    // var_dump($data->errors());
    // $data = array_merge($request->all(), ["imagen"]);
    Post::create($request->validated());
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Indexcontoller extends Controller
{
    //
   public function index () {
   
    $postfromDb=Post::all();
 
    
    

        return view('posts/index',['posts'=>$postfromDb]);
    }

    public function show ($postid) {


        //public function show (Post $singlepost) {
        $singlepost=Post::find($postid);
        //$singlepost=Post::where('id',$postid)->first();
    
        //$singlepost=Post::where('id',$postid)->get();


       // $singlepost=Post::findOrFail($postid);
        if(is_null($singlepost)) { return to_route('post.index');}

return view('posts/show',["singlepost"=>$singlepost]);

    }

public function create()
{




return view('posts/create');


}



public function store()
{
    request()->validate([
        'title' => 'required|string|max:255|min:3',
        'description' => 'required|string|min:10',
        'creater' => 'required|string|max:255|min:3',
    
    ]);

  $Post=new Post() ;
  $data=request()->all();
  $Post->title=request()->title;
  $Post->description=request()->description;
  $Post->creater=request()->creater;

  $Post->save();//insert all


  $data1=$_POST;



   
return to_route('post.index');

}





public function edit($id )
{
    $postfromDb=Post::find($id);

  
    return view('posts/edit',['post'=>$postfromDb]);

}

public function update($id)
{

    
    $data=request()->all();
    $title=request()->title;
     $description=request()->description;
    $creater=request()->creater;

    $post = Post::findOrFail($id);
     
    // Update the post properties
    // $post->title = request()->title;
    // $post->description = request()->description;
    // $post->creater = request()->creater; // Ensure 'creator' is the correct column name
    // $post->save();

    $title=request()->title;
    $description=request()->description;
    $creater=request()->creater;

    $post->update(['title'=>$title,'description'=>$description,'creater'=>$creater]);
    // Save the changes to the database
 




   return to_route('post.show',$id);
}

public function delete($id)
{
    $post = Post::findOrFail($id);

    // Delete the post
    $post->delete();

//Post::where('id',$id)->delete();

  return to_route('post.index');



}


}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Indexcontoller extends Controller
{
    //
   public function index () {
   
     $allpost=[
        ['id'=>  1,'title'=>'PHP','Posted_by'=>"jamele",'Created_at'=>'2014-10-12'   ],
        ['id'=>  4,'title'=>'C','Posted_by'=>"jamelg",'Created_at'=>'2014-10-12'   ],
        ['id'=>  5,'title'=>'jave','Posted_by'=>"jamedl",'Created_at'=>'2014-10-12'   ],
        ['id'=>  8,'title'=>'C#','Posted_by'=>"jamel7",'Created_at'=>'2014-10-12'   ],
        ['id'=>  10,'title'=>'c++','Posted_by'=>"jamel5",'Created_at'=>'2014-10-12'   ]



     ];

        return view('posts/index',['allpost'=>$allpost]);
    }

    public function show ($postid) {

        $singlepost=[
            'id'=>  1,'title'=>'PHP','Posted_by'=>"jamele",'Created_at'=>'2014-10-12'   ];
        
    
        

return view('posts/show',["singlepost"=>$singlepost]);

    }

public function create()
{

return view('posts/create');


}

public function store()
{
 $data1=$_POST;
  $data=request()->all();
   $title=$data['title'];
   $description=request()->description;
   //  $created_at=request()->created_at;
   $created_at=$data['creater'];
     
return to_route('post.index',['postid'=>$data]);

}



public function edit( )
{
    return view('posts/edit');
}

public function update()
{

    
   $data=request()->all();
    $title=request()->title;
     $description=request()->description;
    $creator=request()->creator;
 





   return to_route('post.show',1);
}

public function delete()
{




  return to_route('post.index');



}


}

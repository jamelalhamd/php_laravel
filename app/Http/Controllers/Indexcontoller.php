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





}

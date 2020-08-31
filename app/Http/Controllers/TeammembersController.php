<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;
use App\Task;
use App\Team;
use App\Teammembers;
use Uuid;
use App\Http\Resources\TaskResource;
use DB;


class TeammembersController extends Controller
{
    //
    public function func1($id, Request $request)
    {
        //
        $table= new Teammembers();
        //return Response::json($request);
        if (Teammembers::where('member_email', '=', $request->email)->count() > 0) {
            return Response::json("ERROR: Email address already exists.");

            // user found
         }
        
       
        $table->member_id= Uuid::generate()->string;
          

        
            
         $table->team_id= $id;


            $table->member_name=$request->name;
            $table->member_email=$request->email;
         

            

            
            $table->save();  
            

            return Response::json($table);
            
        
        //return Response::json("Email ID doesn't exist.");


}

}


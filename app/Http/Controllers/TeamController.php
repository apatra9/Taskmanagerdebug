<?php

namespace App\Http\Controllers;
use Response;
//use TeamResource;

use App\Http\Resources\TeamResource;

use Illuminate\Http\Request;
use App\Team;
use Uuid;
use DB;
class TeamController extends Controller
{
    //
    public function store(Request $request)
    {
        //

        $table=new Team();

        //$table->id();
            
        $table->team_id= Uuid::generate()->string;
        $table->team_name=$request->name;
           

            

            
            $table->save();

            


            return Response::json($table); 

        }



        public function show($id)    :TeamResource
        {
            
            


           $user= new Team();
           $user = DB::table('teams')->where('team_id', $id)->get();

          return new TeamResource($user);

        }

          
}

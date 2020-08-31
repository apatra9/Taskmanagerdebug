<?php

namespace App\Http\Controllers;
use Response;
use Illuminate\Http\Request;
use App\Task;
use App\Team;
use App\Teammembers;
use Uuid;
use App\Http\Resources\TaskResource;
use DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function patchitup($task) //://TaskResource
    {
        //
        $page = Task::findOrFail($task);
        Task::where('task_id', $task)->update(array('status' => 'done'));
        return Response::json("OK");


        

    }
    public function showalive() //://TaskResource
    {
        //Table::where('status','=','todo');
        
        $users = DB::table('tasks')->where('status', 'todo')->get();//where('status','todo');

        return Response::json($users);//->toArray();


        

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function func1($id, Request $request)
    {
        //
        $team= new Team();
        $team= Team::where('team_id',$id)->first();
        if ($team!=null)

        {
            
            $team1= DB::table('teammembers')->where('member_id',$request->assignee_id)->value('team_id');
           // return Response::json($team1);

            if ($team1!=$id){
                return Response::json("ERROR: Member doesn't exist in team.");
            }



            $table=new Task();

        
            
            $table->task_id= Uuid::generate()->string;
            $table->team_id=$id;


            $table->title=$request->title;
            $table->assignee_id=$request->assignee_id;
            $table->description=$request->description;
            $table->status=$request->status;

            

            
            $table->save();  
            

            return Response::json($table);
            
        }
        return Response::json("ERROR: Team doesn't exist.");

       

        //return Team::all();
        //return Response::json($id);


    }

/*
        $table=new Task();

        
            
            $table->task_id= Uuid::generate()->string;


            $table->title=$request->title;
            $table->assignee_id=$request->assignee_id;
            $table->description=$request->description;
            $table->status=$request->status;

            

            
            $table->save();         

            //return Response::json($table); 
          
    }
*/
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Response::json(Task::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

    }

    public function showmembertasks($id, $member){

        $users = DB::table('tasks')->where('team_id', $id)->where('assignee_id',$member)->get();

        return Response::json($users);


    }
}

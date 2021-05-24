<?php

namespace App\Http\Controllers;

use App\Models\Project;
use http\Env\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
       return response()->json(Project::query()->paginate(self::PAGE_SIZE), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
           'project_name'=>'required|string|max=255'
        ]);
        $project = Project::query()->create($request->all());
        return response($project, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $project = Project::query()->find($id);
        if(!is_null($project)){
            return response()->json($project::query()->find($id), 200);
        }else{
            return response()->json(['message' => 'Not Found'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, Project $project): JsonResponse
    {
          $valid = $request->validate([
              'project_name'=>'bail|string|max:254',
              'completed_at'=>'date'
           ]);
            $project->update($valid);
            return response()->json([
                'msg'=>'Updated user'
            ], 200);
//            return response()->json(['message' => 'Not Found'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        if(is_null($project)){
            $project->delete();
            return response()->json(null, 200);
        }else{
            return response()->json(['message' => 'Not Found'], 404);
        }
    }
}

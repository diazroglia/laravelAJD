<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\Project;
use App\Http\Requests\CreateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $portfolio =DB::table('projects')->get();
      // $portfolio =Project::orderBy('created_at', 'DESC')->get();

        return view('projects.index', [
          'projects' =>Project::latest('updated_at')->paginate(4)
        ]);
    }
    public function show(Project $project)
    {
        return view('projects.show',[
          //'project' =>Project::findOrFail($id)
          'project'=>$project
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(CreateProjectRequest $request)
    {
      //return request->validated();
        Project::create($request->validated());

        return redirect()->route('projects.index');
    }

    public function edit(Project $project)
    {
        return view('projects.edit',[
          'project'=>$project
        ]);
    }

    public function update(Project $project){

      $project->update([
        'title'=>request('title'),
        'url'=>request('url'),
        'description'=>request('description'),
      ]);

      return redirect()->route('projects.show',$project);

    }

}

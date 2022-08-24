<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Project;
use App\Models\Type;

class ProjectsController extends Controller
{

    public function list()
    {
        return view('projects.list', [
            'projects' => Project::all()
        ]);
    }

    public function addForm()
    {
        return view('projects.add', [
            'types' => Type::all(),
        ]);
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'url' => 'nullable|url',
            'content' => 'required',
            'type_id' => 'required',
        ]);

        $project = new Project();
        $project->title = $attributes['title'];
        $project->url = $attributes['url'];
        $project->content = $attributes['content'];
        $project->type_id = $attributes['type_id'];
        $project->user_id = Auth::user()->id;
        $project->save();

        return redirect('/console/projects/list')
            ->with('message', 'Project has been added!');
    }

    public function editForm(Project $project)
    {
        return view('projects.edit', [
            'project' => $project,
            'types' => Type::all(),
        ]);
    }

    public function edit(Project $project)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'url' => 'nullable|url',
            'content' => 'required',
            'type_id' => 'required',
        ]);

        $project->title = $attributes['title'];
        $project->url = $attributes['url'];
        $project->content = $attributes['content'];
        $project->type_id = $attributes['type_id'];
        $project->save();

        return redirect('/console/projects/list')
            ->with('message', 'Project has been edited!');
    }

    public function imageForm(Project $project)
    {
        return view('projects.image', [
            'project' => $project,
        ]);
    }

    public function image(Project $project)
    {

        $attributes = request()->validate([
            'image' => 'required',
        ]);


        $project->image = $attributes['image'];
        $project->save();
        
        return redirect('/console/projects/list')
            ->with('message', 'Project image has been edited!');
    }

    public function delete(Project $project)
    {
        $project->delete();
        
        return redirect('/console/projects/list')
            ->with('message', 'Project has been deleted!');        
    }
    
}

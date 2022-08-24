<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Skill;

class SkillsController extends Controller
{
    public function list()
    {
        return view('skills.list', [
            'skills' => Skill::all()
        ]);
    }

    public function addForm()
    {

        return view('skills.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'icon' => 'required',
            'favourite' => 'required',
        ]);

        $skill = new Skill();
        $skill->name = $attributes['name'];
        $skill->icon = $attributes['icon'];
        $skill->favourite = $attributes['favourite'];
        $skill->save();

        return redirect('/console/skills/list')
            ->with('message', 'Skill has been added!');
    }

    public function editForm(Skill $skill)
    {
        return view('skills.edit', [
            'skill' => $skill,
        ]);
    }

    public function edit(Skill $skill)
    {

        $attributes = request()->validate([
            'name' => 'required',
            'icon' => 'required',
            'favourite' => 'required',
        ]);

        $skill->name = $attributes['name'];
        $skill->icon = $attributes['icon'];
        $skill->favourite = $attributes['favourite'];
        $skill->save();

        return redirect('/console/skills/list')
            ->with('message', 'Skill has been edited!');
    }

    public function imageForm(Skill $skill)
    {
        return view('skills.image', [
            'skill' => $skill,
        ]);
    }

    public function image(Skill $skill)
    {

        $attributes = request()->validate([
            'image' => 'required',
        ]);

        $skill->image = $attributes['image'];
        $skill->save();
        
        return redirect('/console/skills/list')
            ->with('message', 'Skill image has been edited!');
    }
    
    public function delete(Skill $skill)
    {
        $skill->delete();
        
        return redirect('/console/skills/list')
            ->with('message', 'Skill has been deleted!');        
    }


}
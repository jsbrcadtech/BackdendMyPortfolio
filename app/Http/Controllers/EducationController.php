<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Education;

class EducationController extends Controller
{
    public function list()
    {
        return view('education.list', [
            'education' => Education::all()
        ]);
    }

    public function addForm()
    {

        return view('education.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'name' => 'required',
            'description' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
        ]);

        $education = new Education();
        $education->title = $attributes['title'];
        $education->name = $attributes['name'];
        $education->description = $attributes['description'];
        $education->startdate = $attributes['startdate'];
        $education->enddate = $attributes['enddate'];
        $education->save();

        return redirect('/console/education/list')
            ->with('message', 'Education has been added!');
    }

    public function editForm(Education $education)
    {
        return view('education.edit', [
            'education' => $education,
        ]);
    }

    public function edit(Education $education)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'name' => 'required',
            'description' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
        ]);

        $education->title = $attributes['title'];
        $education->name = $attributes['name'];
        $education->description = $attributes['description'];
        $education->startdate = $attributes['startdate'];
        $education->enddate = $attributes['enddate'];
        $education->save();

        return redirect('/console/education/list')
            ->with('message', 'Education has been edited!');
    }

    public function delete(Education $education)
    {
        $education->delete();
        
        return redirect('/console/education/list')
            ->with('message', 'Education has been deleted!');        
    }

}

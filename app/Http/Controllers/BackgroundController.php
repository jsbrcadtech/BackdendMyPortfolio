<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Background;


class BackgroundController extends Controller
{
    public function list()
    {
        return view('background.list', [
            'background' => Background::all()
        ]);
    }

    public function addForm()
    {

        return view('background.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'name' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'description' => 'required',

        ]);

        $background = new Background();
        $background->title = $attributes['title'];
        $background->name = $attributes['name'];
        $background->startdate = $attributes['startdate'];
        $background->enddate = $attributes['enddate'];
        $background->description = $attributes['description'];
        $background->save();

        return redirect('/console/background/list')
            ->with('message', 'Background has been added!');
    }

    public function editForm(Background $background)
    {
        return view('background.edit', [
            'background' => $background,
        ]);
    }

    public function edit(Background $background)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'name' => 'required',
            'startdate' => 'required',
            'enddate' => 'required',
            'description' => 'required',

        ]);

        $background->title = $attributes['title'];
        $background->name = $attributes['name'];
        $background->startdate = $attributes['startdate'];
        $background->enddate = $attributes['enddate'];
        $background->description = $attributes['description'];
        $background->save();
        return redirect('/console/background/list')
            ->with('message', 'Background has been edited!');
    }

    public function delete(Background $background)
    {
        $background->delete();
        
        return redirect('/console/background/list')
            ->with('message', 'Background has been deleted!');        
    }
}

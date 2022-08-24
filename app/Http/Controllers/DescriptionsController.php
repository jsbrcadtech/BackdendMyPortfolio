<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Description;

class DescriptionsController extends Controller
{
    public function list()
    {
        return view('descriptions.list', [
            'descriptions' => Description::all()
        ]);
    }

    public function addForm()
    {

        return view('descriptions.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $description = new Description();
        $description->title = $attributes['title'];
        $description->description = $attributes['description'];
        $description->save();

        return redirect('/console/descriptions/list')
            ->with('message', 'Description has been added!');
    }

    public function editForm(Description $description)
    {
        return view('descriptions.edit', [
            'description' => $description,
        ]);
    }

    public function edit(Description $description)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $description->title = $attributes['title'];
        $description->description = $attributes['description'];
        $description->save();

        return redirect('/console/descriptions/list')
            ->with('message', 'Description has been edited!');
    }

    public function imageForm(Description $description)
    {
        return view('descriptions.image', [
            'description' => $description,
        ]);
    }

    public function image(Description $description)
    {

        $attributes = request()->validate([
            'image' => 'required',
        ]);

        $description->image = $attributes['image'];
        $description->save();
        
        return redirect('/console/descriptions/list')
            ->with('message', 'Description image has been edited!');
    }

    public function delete(Description $description)
    {
        $description->delete();
        
        return redirect('/console/descriptions/list')
            ->with('message', 'Description has been deleted!');        
    }



}

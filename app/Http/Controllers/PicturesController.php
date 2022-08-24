<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Picture;

class PicturesController extends Controller
{
    public function list()
    {
        return view('pictures.list', [
            'pictures' => Picture::all()
        ]);
    }

    public function addForm()
    {

        return view('pictures.add');
    }

    public function add()
    {

        $attributes = request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $picture = new Picture();
        $picture->name = $attributes['name'];
        $picture->description = $attributes['description'];
        $picture->save();

        return redirect('/console/pictures/list')
            ->with('message', 'Picture has been added!');
    }

    public function editForm(Picture $picture)
    {
        return view('pictures.edit', [
            'picture' => $picture,
        ]);
    }

    public function edit(Picture $picture)
    {

        $attributes = request()->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $picture->name = $attributes['name'];
        $picture->description = $attributes['description'];
        $picture->save();

        return redirect('/console/pictures/list')
            ->with('message', 'Picture has been edited!');
    }



    public function imageForm(Picture $picture)
    {
        return view('pictures.image', [
            'picture' => $picture,
        ]);
    }

    public function image(Picture $picture)
    {

        $attributes = request()->validate([
            'image' => 'required',

        ]);
        
        $picture->image = $attributes['image'];
        $picture->save();

        return redirect('/console/pictures/list')
        ->with('message', 'Picture image has been edited!');
    
    }

    public function delete(Picture $picture)
    {
        $picture->delete();
        
        return redirect('/console/pictures/list')
            ->with('message', 'Picture has been deleted!');        
    }
        
    }

   
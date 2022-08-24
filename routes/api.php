<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Type;
use App\Models\User;
use App\Models\Project;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Contact;
use App\Models\Description;
use App\Models\Background;
use App\Models\Picture;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/types', function(){

    $types = Type::orderBy('title')->get();
    return $types;

});


Route::get('/projects', function(){

    $projects = Project::orderBy('id')->get();

    foreach($projects as $key => $project)
    {
        $projects[$key]['user'] = User::where('id', $project['user_id'])->first();
        $projects[$key]['type'] = Type::where('id', $project['type_id'])->first();

        if($project['image'])
        {
            $projects[$key]['image'] = env('APP_URL').'storage/'.$project['image'];
        }
    }

    return $projects;

});

Route::get('/projects/profile/{project?}', function(Project $project){

    $project['user'] = User::where('id', $project['user_id'])->first();
    $project['type'] = Type::where('id', $project['type_id'])->first();

    if($project['image'])
    {
        $project['image'] = env('APP_URL').'storage/'.$project['image'];
    }

    return $project;

});

Route::get('/education', function(){

    $education = Education::orderBy('id')->get();
    return $education;

});

Route::get('/skills', function(){

    $skills = Skill::orderBy('id')->get();

    foreach($skills as $key => $skill)
    {

        if($skill['photo'])
        {
            $skill[$key]['photo'] = env('APP_URL').'storage/'.$skill['photo'];
        }
    }

    return $skills;

});

Route::get('/contacts', function(){

    $contacts = Contact::orderBy('id')->get();
    return $contacts;

});


Route::get('/descriptions', function(){

    $descriptions = Description::orderBy('id')->get();

    foreach($descriptions as $key => $description)
    {

        if($description['photo'])
        {
            $description[$key]['photo'] = env('APP_URL').'storage/'.$description['photo'];
        }
    }

    return $descriptions;

});

Route::get('/education', function(){

    $education = Education::orderBy('id')->get();
    return $education;

});

Route::get('/skills', function(){

    $skills = Skill::orderBy('id')->get();

    foreach($skills as $key => $skill)
    {

        if($skill['photo'])
        {
            $skill[$key]['photo'] = env('APP_URL').'storage/'.$skill['photo'];
        }
    }

    return $skills;

});

Route::get('/contacts', function(){

    $contacts = Contact::orderBy('id')->get();
    return $contacts;

});


Route::get('/descriptions', function(){

    $descriptions = Description::orderBy('id')->get();

    foreach($descriptions as $key => $description)
    {

        if($description['photo'])
        {
            $description[$key]['photo'] = env('APP_URL').'storage/'.$description['photo'];
        }
    }

    return $descriptions;

});

Route::get('/background', function(){

    $background = Background::orderBy('id')->get();
    return $background;

});

Route::get('/pictures', function(){

    $pictures = Picture::orderBy('id')->get();

    foreach($pictures as $key => $picture)
    {

        if($picture['photo'])
        {
            $picture[$key]['photo'] = env('APP_URL').'storage/'.$picture['photo'];
        }
    }

    return $pictures;

});



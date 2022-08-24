@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Project Image</h2>

    <div class="w3-margin-bottom">
        @if($project->image)
            <img src="{{$project->image}}" width="200">
        @endif
    </div>

    <form method="post" action="/console/projects/image/{{$project->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="image">Image URL:</label>
            <input type="url" name="image" id="image" value="{{old('image')}}" required>
            
            @if ($errors->first('image'))
                <br>
                <span class="w3-text-red">{{$errors->first('image')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Image</button>

    </form>

    <a href="/console/projects/list">Back to Project List</a>

</section>

@endsection

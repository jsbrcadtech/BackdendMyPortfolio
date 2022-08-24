@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Background</h2>

    <form method="post" action="/console/background/edit/{{$background->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{old('title', $background->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{old('name', $background->name)}}" required>
            
            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" value="{{old('description', $background->description)}}" required>
            
            @if ($errors->first('description'))
                <br>
                <span class="w3-text-red">{{$errors->first('description')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="startdate">Startdate:</label>
            <input type="date" name="startdate" id="startdate" value="{{old('startdate', $background->startdate)}}" required>
            
            @if ($errors->first('startdate'))
                <br>
                <span class="w3-text-red">{{$errors->first('startdate')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="enddate">Enddate:</label>
            <input type="date" name="enddate" id="enddate" value="{{old('enddate', $background->enddate)}}" required>
            
            @if ($errors->first('enddate'))
                <br>
                <span class="w3-text-red">{{$errors->first('enddate')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Background</button>

    </form>

    <a href="/console/background/list">Back to Background List</a>

</section>

@endsection
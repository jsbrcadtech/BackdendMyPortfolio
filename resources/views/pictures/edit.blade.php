@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Picture</h2>

    <form method="post" action="/console/pictures/edit/{{$picture->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{old('name', $picture->name)}}" required>
            
            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" value="{{old('description', $picture->description)}}" required>
            
            @if ($errors->first('description'))
                <br>
                <span class="w3-text-red">{{$errors->first('description')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Picture</button>

    </form>

    <a href="/console/pictures/list">Back to Picture List</a>

</section>

@endsection
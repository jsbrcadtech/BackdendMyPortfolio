@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Description</h2>

    <form method="post" action="/console/descriptions/edit/{{$description->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{old('title', $description->title)}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" value="{{old('description', $description->description)}}" required>

            @if ($errors->first('description'))
                <br>
                <span class="w3-text-red">{{$errors->first('description')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Edit Description</button>

    </form>

    <a href="/console/descriptions/list">Back to Description List</a>

</section>

@endsection

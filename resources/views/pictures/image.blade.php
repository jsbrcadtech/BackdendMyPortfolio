@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Picture</h2>

    <div class="w3-margin-bottom">
        @if($picture->image)
            <img src="{{$picture->image}}" width="200">
        @endif
    </div>

    <form method="post" action="/console/pictures/image/{{$picture->id}}" novalidate class="w3-margin-bottom">

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

    <a href="/console/pictures/list">Back to Picture List</a>

</section>

@endsection

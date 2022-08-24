@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Skill</h2>

    <form method="post" action="/console/skills/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{old('name')}}" required>
            
            @if ($errors->first('name'))
                <br>
                <span class="w3-text-red">{{$errors->first('name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="icon">Icon:</label>
            <input type="text" name="icon" id="icon" value="{{old('icon')}}" required>

            @if ($errors->first('icon'))
                <br>
                <span class="w3-text-red">{{$errors->first('icon')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="favourite">Favourite:</label>
            <input type="number" name="favourite" id="favourite" value="{{old('favourite')}}" required>

            @if ($errors->first('favourite'))
                <br>
                <span class="w3-text-red">{{$errors->first('favourite')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Skill</button>

    </form>

    <a href="/console/skills/list">Back to Skill List</a>

</section>

@endsection
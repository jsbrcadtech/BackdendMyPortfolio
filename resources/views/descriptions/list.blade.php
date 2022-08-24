@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Descriptions</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th></th>
            <th>Title</th>
            <th>Description</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($descriptions as $description)
            <tr>
                <td>
                    @if ($description->image)
                        <img src="{{$description->image}}" width="200">
                    @endif
                </td>
                <td>{{$description->title}}</td>
                <td>{{$description->description}}</td>
                <td><a href="/console/descriptions/image/{{$description->id}}">Image</a></td>
                <td><a href="/console/descriptions/edit/{{$description->id}}">Edit</a></td>
                <td><a href="/console/descriptions/delete/{{$description->id}}">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <a href="/console/descriptions/add" class="w3-button w3-green">New Description</a>

</section>

@endsection

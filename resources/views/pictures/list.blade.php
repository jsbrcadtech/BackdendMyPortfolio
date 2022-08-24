@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Picture</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th></th>
            <th>Picture Name</th>
            <th>Description</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($pictures as $pictureData): ?>
            <tr>
                <td>
                    @if ($pictureData->image)
                            <img src="{{$pictureData->image}}" width="200">
                    @endif
                </td>
                <td>{{$pictureData->name}}</td>
                <td>{{$pictureData->description}}</td>
                <td><a href="/console/pictures/image/{{$pictureData->id}}">Image</a></td>
                <td><a href="/console/pictures/edit/{{$pictureData->id}}">Edit</a></td>
                <td><a href="/console/pictures/delete/{{$pictureData->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/pictures/add" class="w3-button w3-green">New Picture</a>

</section>

@endsection
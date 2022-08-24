@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Background</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th>Name</th>
            <th>Startdate</th>
            <th>Enddate</th>
            <th>Description</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($background as $backgroundData): ?>
            <tr>
                <td>{{$backgroundData->title}}</td>
                <td>{{$backgroundData->name}}</td>
                <td>{{$backgroundData->startdate}}</td>
                <td>{{$backgroundData->enddate}}</td>
                <td>{{$backgroundData->description}}</td>
                <td><a href="/console/background/edit/{{$backgroundData->id}}">Edit</a></td>
                <td><a href="/console/background/delete/{{$backgroundData->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/background/add" class="w3-button w3-green">New Background</a>

</section>

@endsection
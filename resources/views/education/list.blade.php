@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Education</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th>Name</th>
            <th>Description</th>
            <th>Startdate</th>
            <th>Enddate</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($education as $educate): ?>
            <tr>
                <td>{{$educate->title}}</td>
                <td>{{$educate->name}}</td>
                <td>{{$educate->description}}</td>
                <td>{{$educate->startdate}}</td>
                <td>{{$educate->enddate}}</td>
                <td><a href="/console/education/edit/{{$educate->id}}">Edit</a></td>
                <td><a href="/console/education/delete/{{$educate->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/education/add" class="w3-button w3-green">New Education</a>

</section>

@endsection
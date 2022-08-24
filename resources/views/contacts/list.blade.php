@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Contacts</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th></th>
            <th></th>
        </tr>
        <?php foreach($contacts as $contact): ?>
            <tr>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
                <td>{{$contact->address}}</td>
                <td><a href="/console/contacts/edit/{{$contact->id}}">Edit</a></td>
                <td><a href="/console/contacts/delete/{{$contact->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/contacts/add" class="w3-button w3-green">New Contact</a>

</section>

@endsection
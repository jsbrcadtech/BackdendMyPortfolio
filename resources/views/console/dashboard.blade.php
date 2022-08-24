@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <ul id="dashboard">
        <li><a href="/console/projects/list">Manage Projects</a></li>
        <li><a href="/console/contacts/list">Manage Contacts</a></li>
        <li><a href="/console/education/list">Manage Education</a></li>
        <li><a href="/console/skills/list">Manage Skills</a></li>
        <li><a href="/console/descriptions/list">Manage Descriptions</a></li>
        <li><a href="/console/background/list">Manage Bakgrounds</a></li>
        <li><a href="/console/pictures/list">Manage Pictures</a></li>
        <li><a href="/console/types/list">Manage Types</a></li>
        <li><a href="/console/users/list">Manage Users</a></li>
    </ul>

</section>

@endsection

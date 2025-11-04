<h2>User Report</h2>
<table border="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Created</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
        </tr>
    @endforeach
</table>

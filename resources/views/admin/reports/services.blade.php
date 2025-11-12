<h2>Service Report</h2>
<table border="1" cellspacing="0" cellpadding="5" width="100%">
    <tr>
        <th>ID</th><th>Title</th><th>Description</th><th>Created</th>
    </tr>
    @foreach($services as $service)
        <tr>
            <td>{{ $service->id }}</td>
            <td>{{ $service->title }}</td>
            <td>{{ $service->description }}</td>
            <td>{{ $service->created_at->format('Y-m-d') }}</td>
        </tr>
    @endforeach
</table>

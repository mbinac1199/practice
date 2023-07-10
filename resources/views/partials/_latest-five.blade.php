<h2>Last Five Records</h2>

@unless (count($latestFive) == 0)

    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone No</th>
            <th>Address</th>
        </thead>
        <tbody>
            @foreach ($latestFive as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No records found</p>

@endunless

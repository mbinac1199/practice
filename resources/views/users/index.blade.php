<x-layout>
    <h1>All records</h1>
    @unless (count($users) == 0)
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Address</th>
                <th>Actions</th>
            </thead>
            <tbody>

                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                        <th>
                            <div class="d-flex gap-2">
                                <a class="text-decoration-none" href="/update/{{ $user->id }}">
                                    <button class="btn btn-warning text-white">Update</button>
                                </a>
                                <form action="/destroy/{{ $user->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input value="Delete" type="submit" class="btn btn-danger" />
                                </form>
                            </div>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No records found</p>
    @endunless
    <div class="mt-6 p-4">
        {{ $users->links() }}
    </div>
    @include('partials._latest-five')
</x-layout>

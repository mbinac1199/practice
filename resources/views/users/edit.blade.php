<x-layout>
    <h1>Update {{ $user->id }}</h1>
    <form method="POST" action="/update/{{ $user->id }}" class="my-3">
        @csrf
        @method('PUT')
        <!-- Text Input -->
        <label class="fw-medium mb-1">Name</label>
        <input required class="form-control mb-2" name="name" size="20" type="text" value="{{ $user->name }}" />
        <label class="fw-medium mb-1">Email</label>
        <input required class="form-control mb-2" name="email" size="20" type="text"
            value="{{ $user->email }}" />
        <label class="fw-medium mb-1">Phone No</label>
        <input required class="form-control mb-2" name="phone" size="20" type="text"
            value="{{ $user->phone }}" />
        <label class="fw-medium mb-1">Address</label>
        <input required class="form-control mb-2" name="address" size="20" type="text"
            value="{{ $user->address }}" />
        <input type="submit" class="btn btn-primary" />
    </form>
    @include('partials._latest-five')
</x-layout>

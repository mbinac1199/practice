<x-layout>
    <h1>Add User (Step 1)</h1>
    <form method="POST" action="/store" class="my-3">
        @csrf
        <!-- Text Input -->
        <label class="fw-medium mb-1">Name</label>
        <input required class="form-control mb-2" name="name" size="20" type="text" />
        <label class="fw-medium mb-1">Email</label>
        <input required class="form-control mb-2" name="email" size="20" type="text" />
        <input type="submit" value="Next" class="btn btn-primary" />
    </form>
    @include('partials._latest-five')
</x-layout>

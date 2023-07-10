<x-layout>
    <h1>Add User (Step 2)</h1>
    <form method="POST" action="/store2" class="my-3">
        @csrf
        <!-- Text Input -->
        <label class="fw-medium mb-1">Address</label>
        <input required class="form-control mb-2" name="address" size="20" type="text" />
        <label class="fw-medium mb-1">Phone No</label>
        <input required class="form-control mb-2" name="phone" size="20" type="text" />
        <input type="submit" class="btn btn-primary" />
    </form>
    @include('partials._latest-five')
</x-layout>

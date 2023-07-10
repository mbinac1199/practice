<x-layout>
    <h1>Login</h1>
    <form method="POST" action="/login" class="my-3">
        @csrf
        <label class="fw-medium mb-1">Email</label>
        <input required class="form-control mb-2" name="email" size="20" type="text" />
        <label class="fw-medium mb-1">Password</label>
        <input required class="form-control mb-2" type="password" name="password" size="20" />
        <input type="submit" value="Login" class="btn btn-primary" />
    </form>
</x-layout>

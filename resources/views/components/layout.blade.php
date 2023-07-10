<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Address Book</title>
</head>

<body class="bg-light">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom container">
        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">Address Book</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/users"
                    class="nav-link {{ request()->is('users') ? 'active' : '' }}">Home</a>
            </li>
            @if (session()->has('authenticated') && session('authenticated') == true)
                <li class="nav-item"><a href="/add" class="nav-link">Add</a></li>
                <li class="nav-item"><a href="/logout" class="nav-link">Logout</a></li>
            @else
                <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
            @endif
        </ul>
    </header>
    <main>
        <div class="bg-white container rounded-4 py-4 px-5 mt-3">
            {{ $slot }}
        </div>
    </main>
</body>

</html>

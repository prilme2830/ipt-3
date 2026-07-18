<!DOCTYPE html>
<html>

<head>
    <title>Portfolio</title>
</head>

<body>
    <nav>

        {{-- <a href="/Portfolio">Portfolio</a>
        <a href="/About">About</a>
        <a href="/Contacts">Contacts</a> --}}

        <a href="{{ route('profile') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact') }}">Contacts</a>



    </nav>
</body>

</html>
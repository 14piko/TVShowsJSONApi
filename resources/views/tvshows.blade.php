<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<body>
<h1>Search Results</h1>
@if (count($shows) > 0)
    <ul>
        @foreach ($shows as $show)
            <li>
                <h2><a href="{{ $show['url'] }}">{{ $show['name'] }}</a></h2>
                <h3>{!! $show['summary'] !!}</h3>
            </li>
        @endforeach
    </ul>
@else
    <h3>No TV shows found.</h3>
@endif
</body>
</html>

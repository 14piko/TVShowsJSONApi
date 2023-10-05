<!DOCTYPE html>
<html>
<head>
    <title>Search TV Shows</title>
</head>
<body>
<h1>Search TV Shows</h1>
<form method="GET" action="{{ route('/index') }}">
    <label style="font-size: 20px" for="query">Search TV Shows:</label>
    <input  style="font-size: 20px" type="text" name="q" id="query" placeholder="Enter a TV show name">
    <button style="font-size: 20px;" type="submit">Search</button>
</form>
</body>
</html>

<!DOCTYPE html>
<html>
    <title>main page </title>
    <link rel="stylesheet" href = "app.css">
    <script src = "/app.js"></script>
    <body> 
        <h1> hello world </h1>
    <article>
        @unless(empty($people))
            There are some people.
        @endunless
        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach
    </article>
    </body>


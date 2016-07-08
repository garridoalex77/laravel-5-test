<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
</head>
<body>
@foreach ($posts as $post)
    <h1>{{$post->title}}</h1>
    <h1>{{$post->body}}</h1>
@endforeach

</body>
</html>